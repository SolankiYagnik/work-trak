@extends('admin.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>LEADS DETAILS</h4>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable </h3>
              </div>
              <div class="card-body">
                <table id="user_leads" class="table table-bordered user_datatable">
                  <thead>
                      <tr>
                        <th>Username</th>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Sur Name</th>
                        <th>Telephone</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach ($lead as $leads)     
                    <tr>
                      <td>{{ $leads->id }}</td>
                      <td>{{ $leads->user->name }}</td>
                      <td>{{ $leads->title }}</td>
                      <td>{{ $leads->first_name }}</td>
                      <td>{{ $leads->sur_name }}</td>
                      <td>{{ $leads->telephone }}</td>
                      <td>{{ $leads->email }}</td>
                      <td>{{ $leads->postcode }}</td>
                      <td>
                        <a href="{{ route('view-lead',$leads->id) }}"><i style="color: rgb(34, 29, 29)" class="fas fa-eye"></i></a>
                      </td>
                    </tr>
                    @endforeach --}}
                  </tbody>
              </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#user_leads').DataTable({
              processing: true,
              serverSide: true,
              ajax:{
                  url: "{{ route('lead-view') }}",
              },
              columns:[
                      {data: 'username', name: 'username'},
                      {data: 'title', name: 'title'},
                      {data: 'first_name', name: 'first_name'},
                      {data: 'sur_name', name: 'sur_name'},
                      {data: 'telephone', name: 'telephone'},
                      {data: 'address1', name: 'address1'},
                      {data: 'action', name: 'action', orderable: false, searchable: false},
                  ],
                  order: [[0, 'asc']], //asc desc
                  scrollY: true
          });
      });
      
    </script>
</section>
@endsection