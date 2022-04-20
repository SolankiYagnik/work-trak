<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use App\Models\LeadNote;
use App\Models\UsersLeads;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use File;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\AddLeadUsersController;


class AddLeadUsersController extends Controller
{

    public function index()
    {
        if (request()->ajax())
        {
            return datatables()->of(User::where('role', "doorcan_user")->latest()->get())
                ->addColumn('image', function ($row) {
                    $image = !empty($row->image) ? '<img src="'.url('storage/image/'.$row->image).'" height="20"/>' : NULL;
                    return $image;
                })
                ->addColumn('action', function($row){
                    $route1 = route('edit-user', [$row->id]);
                    $route2 = route('destroy-user', [$row->id]);
                    $btn = '<a href="' . $route1 . '"><i style="color: green" class="fas fa-edit"></i></a> &nbsp;&nbsp;
                    <a href="' . $route2 . '"><i style="color: red" class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }

        // $manage_user = User::where('role', "doorcan_user")->latest()->get();
        return view('admin.view.manage-user');
    }

    // public function mailIndex()
    // {
    //     $data= ['name'=>"Yagnik", 'data'=>"Hello Yagnik"];
    //     $user['to']= 'yagniks.coderkube@gmail.com';

    //     Mail::send('mail', $data, function ($message) use ($user) {
    //         $message->to($user['to']);
    //         $message->subject('Hello D');
    //     });
    // }

    public function lead_view()
    {
        if (request()->ajax())
        {
            return datatables()->of(Lead::all())
                ->addColumn('username', function ($row) {
                    $name = $row->user->name;
                    return $name;
                })
                ->addColumn('action', function($row){
                    $view = route('view-lead', [$row->id]);
                    $btn = '<a href="' . $view . '"><i style="color: rgb(34, 29, 29)" class="fas fa-eye"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // $lead = Lead::all();
        return view('admin.view.lead');
    }

    public function create()
    {
        return view('admin.view.add-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email'=> 'required|max:255|unique:users,email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|min:8|max:12',
        ],
        [
            'email.unique' => 'This email address has already been used.',
        ]
        );
        if ($files = $request->file('image')) {
            $destinationPath = 'storage/image'; // upload path
            $profileImage = Str::random(33) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";

            $user = new User;
            $user->name= $request->input('name');
            $user->last_name= $request->input('last_name');
            $user->email= $request->input('email');
            $user->image= $profileImage;
            $user->password= Hash::make($request->input('password'));
            $user->role = 'doorcan_user';
            $user->save();
            return redirect()->route('manage-user')->with('success','User created successfully!');
        }

    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.view.edit-user',compact('user'));
    }

    public function update(User $user, Request $request, $id)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'email'=> 'required|string|max:255|unique:users,email,'.$id,
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'email' => 'This email address has already been used.',
        ]
        );

            $user = User::findOrFail($id);
            $user->name =  $request->name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            if($request->file('image')){
                $destinationPath = 'storage/image';
                $imagePath= 'storage/image/'.$user->image;
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $profileImage = Str::random(33) . "." . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move($destinationPath, $profileImage);
                $update['image'] = "$profileImage";
                $user->image= $profileImage;
            }
            if ($request->password){
                $user->password= Hash::make($request->password);
            }
            $user->role = 'doorcan_user';
            $user->save();
            return redirect()->route('manage-user')->with('success','User profile updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($request->id);
        unlink("storage/image/".$user->image);
        User::where("id", $user->id)->delete();
        return redirect()->route('manage-user')->with("success", "User record deleted successfully.");
    }

    public function leadEdit($id)
    {
        $lead = Lead::with('leadNotes')->find($id);
        return view('admin.view.view-lead', compact('lead'));

        // $lead = Lead::find($id);
        // $lead_note = LeadNote::where(['lead_id' => $id])->get();
        // return view('admin.view.view-lead', compact('lead', 'lead_note'));
    }

    public function leadUpdate(Request $request, $id)
    {
        $request->validate([
            'note' => 'required|string'
        ]);
        $lead_note = new LeadNote;
        $lead_note->user_id = Auth::user()->id;
        $lead_note->lead_id = $request->id;
        $lead_note->note = $request->note;
        $lead_note->save();
        return redirect()->back()->with('success', 'Lead note submited successfully');
    }
}
