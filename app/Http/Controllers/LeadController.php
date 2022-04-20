<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use App\Models\LeadNote;
use Illuminate\Http\Request;
use App\Http\Controller\Leads;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserAddLeadNotification;

class LeadController extends Controller
{

    public function index()
    {
        if (request()->ajax()) 
        {
            return datatables()->of(Lead::where('user_id', Auth::user()->id)->get())
                ->addColumn('action', function($row){
                    $view = route('edit-lead', [$row->id]);
                    $btn = '<a href="' . $view . '"><i style="color: rgb(34, 29, 29)" class="fas fa-eye"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        // $lead = Lead::where('user_id', Auth::user()->id)->get();
        return view('user.view.lead');
    }

    public function notifications()
    {
        auth()->user()->unreadNotifications->markAsRead();

        // dd(auth()->user()->notifications->first()->data);

        return view('user.view.notification', [ 'notifications' => auth()->user()->notifications ]);
    }

    public function notify()
    {
        if (auth()->user()) 
        {
            $user = User::first();
            
            auth()->user()->notify(new UserAddLeadNotification($user));
        }
        // dd('done');
    }


    public function leadindex()
    {
        return view('user.view.add-lead');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'sur_name' => 'required|string|max:255',
            'telephone' => 'required|digits:11',
            'email' => 'required|string|max:255|email|unique:leads,email',
            'address1' => 'required|string|max:255',
            'postcode' => 'required|max:7'
        ]);
          
        $lead = new Lead;
        $leads = array(
                'user_id' => Auth::user()->id,
                'title' => $request['title'],
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'sur_name' => $request['sur_name'],
                'telephone' => $request['telephone'],
                'telephone2' => $request['telephone2'],
                'email' => $request['email'],
                'address1' => $request['address1'],
                'address2' => $request['address2'],
                'address3' => $request['address3'],
                'town' => $request['town'],
                'postcode' => $request['postcode'],
                'preferred_appointment_time' => $request['preferred_appointment_time'],
                'source_type' => $request['source_type'],
                'source_name' => $request['source_name'],
                'windows' => $request['windows'],
                'doors' => $request['doors'],
                'conservatory' => $request['conservatory'],
                'porch' => $request['porch'],
                'fsg_sides' => $request['fsg_sides'],
                'other' => $request['other'],
                'product_notes' => $request['product_notes'],
                );
                
            $user = Lead::create($leads);
            $insertedId = $user->id;
            $lead_note = new LeadNote;
            $lead_note->user_id= Auth::user()->id;
            $lead_note->lead_id= $insertedId;
            $note = "Lead Created by ".$user->user->name. " : ".$user['title']." " .$user['first_name']." ".$user['surname']." ".$user['address1']." ".$user['town']." ".$user['postcode']." ".
            $user['telephone']." ".$user['email'].".";
            $lead_note->note= $note;
            $lead_note->save();
            if (auth()->user()) 
            {
                $user = User::first();
                auth()->user()->unreadNotifications(new UserAddLeadNotification($user));
                // return view('user.layouts.navbar', compact('lead_note'));

            }
            return redirect()->route('index')->with('success','Lead created successfully!');
    }
        

    public function edit($id)
    {
        $lead = Lead::with('leadNotes')->find($id);
        return view('user.view.edit-lead', compact('lead'));
        // $lead = Lead::find($id);
        // $lead_note = LeadNote::where(['lead_id' => $id])->get();
        // return view('user.view.edit-lead', compact('lead', 'lead_note'));
    }

    public function update(Request $request, $id)
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