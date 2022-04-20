@extends('admin.layouts.app')
@section('css')
<style>
  #card-headers{
      background-color: green;
  }
</style>

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Lead User Edit</h4>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div id="card-headers" class="card-header btn-background">
            <h3 class="card-title">Edit User </h3>
          </div>

    <form method="POST" enctype="multipart/form-data" action="{{ route('update-user',$user->id) }}" class="row g-3 needs-validation" novalidate>
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label>First Name <span style="color: red;"> *</span></label>
        <input type="text" name="name" class="form-control" id="validationCustom02" value="{{ $user->name }}" required>
      <span style="color: red">@error('name'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Last Name <span style="color: red;"> </span></label>
        <input type="text" name="last_name" class="form-control" id="validationCustom03" value="{{ $user->last_name }}" required>
      <span style="color: red">@error('last_name'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Email <span style="color: red;"> *</span></label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail7" aria-describedby="emailHelp" placeholder="Enter email" required>
      <span style="color: red">@error('email'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Password <span style="color: red;"> *</span></label>
        <input type="password" name="password" class="form-control" value="" id="validationCustom03">
        <p>(Leave blank if you are not changing the password)</p>
        <span style="color: red">@error('password'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Profile <span style="color: red;"> *</span></label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="image" value="{{ $user->image }}" class="form-control" accept=".png,.jepg,.jpg,.png" required>
          </div>
        </div>
        <img width="50px" height="auto" src="{{ asset('storage/image/'.$user->image) }}" alt="" title="">
        <span style="color: red">@error('image'){{ $message }}@enderror</span>
      </div>
      <div class="col-12">
        <button name="submit" id="card-headers" class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </div>
    </form>
        </div>
      </div>
    </div> 
  </div>
</section> 
@endsection