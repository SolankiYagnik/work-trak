@extends('admin.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4>Manage User</h4>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 table-responsive">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable </h3>
                            <a href="{{ route('add-user') }}" class="btn btn-success btn-sm float-right btn-color">Add</a>
                        </div>
                        <div class="card-body">
                            <table id="user_table" class="table table-bordered user_datatable">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                  {{-- @foreach ($manage_user as $user) 
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <img width="50px" height="auto" src="{{ asset('storage/image/'.$user->image) }}" alt="">
                                        </td>
                                        <td>
                                            <a href="{{ route('edit-user',$user->id) }}">
                                                <i style="color: green" class="fas fa-edit"></i>
                                            </a> &nbsp;
                                            <a href="{{ route('destroy-user',$user->id) }}">
                                                <i style="color: red" class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr> 
                                  @endforeach  --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#user_table').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url: "{{ route('manage-user') }}",
                },
                columns:[
                     // { data: 'id', name: 'id', 'visible': false},
                        {data: 'name', name: 'name'},
                        {data: 'last_name', name: 'last_name'},
                        {data: 'email', name: 'email'},
                        {data: 'image', name: 'image'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                    order: [[0, 'asc']], //asc desc
                    scrollY: true
            });
        });
        
      </script>
</div>
</section> 
@endsection