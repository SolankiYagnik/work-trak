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
          <h4>Add User</h4>
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
            <h3 class="card-title">Add User </h3>
          </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('store-user') }}" class="row g-3 needs-validation" novalidate>
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label>First Name <span style="color: red;"> *</span></label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}" >
        <span style="color: red">@error('name'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Last Name <span style="color: red;"> </span></label>
        <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" >
        <span style="color: red">@error('last_name'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Email <span style="color: red;"> *</span></label>
        <input type="email" name="email" class="form-control" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter email" required>
        <span style="color: red">@error('email'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Password <span style="color: red;"> *</span></label>
        <input type="password" name="password" class="form-control" value="{{old('password')}}" required>
        <span style="color: red">@error('password'){{ $message }}@enderror</span>
      </div>

      <div class="form-group">
        <label>Profile <span style="color: red;"> *</span></label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="image" class="form-control" value="{{old('image')}}" accept=".png,.jepg,.jpg,.png" required>
          </div>
        </div>
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