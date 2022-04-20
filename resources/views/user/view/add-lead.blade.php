@extends('user.layouts.app')
@section('required-css')
<style>
  .required-fields:after {
    content:" *";
    color: red;
  }
  #card-headers {
    background-color: green;
  }
</style>

@section('lead-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>LEADS DETAILS</h4>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
     <form method="POST" action="{{ route('store') }}" class="row g-3 needs-validation" novalidate>
      @csrf
    <div class="row">
      <!-- left column -->
     
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="card card-info">
          <div id="card-headers" class="card-header btn-background">
            <h3 class="card-title">Add Lead Details</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <div class="form-horizontal row">
            <div class="card-body col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Title <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" name="title" class="form-control" id="validationCustom01" value="{{old('title')}}"  required maxlength="255">
                  <span style="color: red">@error('title'){{ $message }}@enderror</span> <br>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Firstname <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" maxlength="255" required>
                  <span style="color: red">@error('first_name'){{ $message }}@enderror</span> <br>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Lastname</label>
                <div class="col-sm-6">
                  <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" maxlength="255">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Surname <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" name="sur_name" class="form-control" value="{{old('sur_name')}}" required maxlength="255">
                  <span style="color: red">@error('sur_name'){{ $message }}@enderror</span> <br>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Telephone <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" name="telephone" class="form-control" value="{{old('telephone')}}" maxlength="13" required>
                  <span style="color: red">@error('telephone'){{ $message }}@enderror</span> <br>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Telephone 2</label>
                <div class="col-sm-6">
                  <input type="text" name="telephone2" class="form-control" value="{{old('telephone2')}}" maxlength="13">
                </div>
              </div>
                 <div class="form-group row">
                <label class="col-sm-4 col-form-label">Email <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="email" name="email" class="form-control" value="{{ old('email') }}" aria-describedby="emailHelp" required maxlength="200">
                  <span style="color: red">@error('email'){{ $message }}@enderror</span> <br>
                </div>
              </div>
              <hr>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Preferred appointment time</label>
                <div class="col-sm-6">
                  <input type="text" name="preferred_appointment_time" value="{{ old('preferred_appointment_time') }}" class="form-control" maxlength="100">
                </div>
              </div>
              <hr>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Source Type</label>
                <div class="col-sm-6">
                  <input type="text" name="source_type" value="{{ old('source_type') }}" class="form-control" maxlength="200">
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Source Name</label>
                <div class="col-sm-6">
                  <input type="text" name="source_name" value="{{ old('source_name') }}" class="form-control" maxlength="200">
                </div>
              </div>
            </div>
            <!-- /.card-body -->
              <div class="card-body col-md-6">
          
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Address 1 <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" name="address1" value="{{ old('address1') }}" class="form-control" required maxlength="255">
                  <span style="color: red">@error('address1'){{ $message }}@enderror</span> <br>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Address 2</label>
                <div class="col-sm-6">
                  <input type="text" name="address2" value="{{ old('address2') }}" class="form-control" maxlength="255">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Address 3</label>
                <div class="col-sm-6">
                  <input type="text" name="address3" value="{{ old('address3') }}" class="form-control" maxlength="255">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Town</label>
                <div class="col-sm-6">
                  <input type="text" name="town" value="{{ old('town') }}" class="form-control" maxlength="255">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Postcode <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" name="postcode" value="{{ old('postcode') }}" class="form-control" required maxlength="9">
                  <span style="color: red">@error('postcode'){{ $message }}@enderror</span>
                  <span style="color:red"></span>
                </div>
              </div>
            <hr>
              <div class="row">
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Windows</label>
                     <input type="text" name="windows" value="{{ old('windows') }}" class="form-control" maxlength="5">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Doors</label>
                    <input type="text" name="doors" value="{{ old('doors') }}" class="form-control" maxlength="5" >
                  </div>
                </div>
             
             <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Conservatory</label>
                    <select class="custom-select" name="conservatory">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select> 
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Porch</label>
                    <select class="custom-select" name="porch">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>FSG sides</label>
                    <input type="text" name="fsg_sides" value="{{ old('fsg_sides') }}" class="form-control" maxlength="5">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Other</label>
                    <select class="custom-select" name="other">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-12">
                  <!-- select -->
                  <div class="form-group">
                    <label>Product Notes</label>
                   <textarea class="form-control" value="{{ old('product_notes') }}" name="product_notes" maxlength="500"></textarea>
                  </div>
                </div>

              </div>

              <div class="form-group">
                <a href="{{ route('index') }}" class="btn btn-success"> Cancel</a> &nbsp;&nbsp;
                <button name="submit" class="btn btn-success" type="submit">Submit form</button>
              </div>
           </div>
            <!-- /.card-footer -->
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    </form>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection