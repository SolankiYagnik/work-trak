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
          <h4>View Lead Details</h4>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
        <div class="clear-both"></div>
    <form>
    <div class="row"> 
      <div class="col-md-12">
        <div class="card card-info">
          <div id="card-headers" class="card-header btn-background">
            <h3 class="card-title">View Lead Details</h3>
          </div>
          <div class="form-horizontal row">
            <div class="card-body col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Title <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->title }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Firstname</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->first_name }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Surname <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->last_name }}" readonly>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Telephone <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control"  value="{{ $lead->telephone }}" readonly>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Telephone 2</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->telephone2 }}" readonly>
                </div>
              </div>
                 <div class="form-group row">
                <label class="col-sm-4 col-form-label">Email <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->email }}" readonly>
                </div>
              </div>
              <hr>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Preferred appointment time</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->preferred_appointment_time }}" readonly>
                </div>
              </div>
              <hr>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Source Type</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->source_type }}" readonly>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-4 col-form-label">Source Name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control"value="{{ $lead->source_name }}" readonly>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-body col-md-6">
          
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Address 1 <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->address1 }}"readonly>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Address 2</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->address2 }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Address 3</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->address3 }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Town</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->town }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Postcode <span style="color: red;"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="{{ $lead->postcode }}" readonly>
                </div>
              </div>
            <hr>
              <div class="row">
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Windows</label>
                     <input type="text" class="form-control" value="{{ $lead->windows }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Doors</label>
                    <input type="text" class="form-control" value="{{ $lead->doors }}" readonly>
                  </div>
                </div>
             
             <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Conservatory</label>
                     <input type="text" class="form-control" value="{{ $lead->conservatory }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Porch</label>
                      <input type="text" class="form-control" value="{{ $lead->porch }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>FSG sides</label>
                    <input type="text" class="form-control"  value="{{ $lead->fsg_sides }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Other</label>
                    <input type="text" class="form-control" value="{{ $lead->other }}" readonly>
                  </div>
                </div>
                <div class="col-sm-12">
                  <!-- select -->
                  <div class="form-group">
                    <label>Product Notes</label>
                   <textarea class="form-control" readonly>{{ $lead->product_notes }}</textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
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
<!-- /.content -->

 <section class="content">
  <div class="container-fluid">
     <form action="{{ route('updateLead',$lead->id) }}" method="post">
      @csrf
    <div class="row">
      <!-- left column -->
     
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="card card-info">
          <div id="card-headers" class="card-header btn-background">
            <h3 class="card-title">Add Lead Note</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <div class="form-horizontal">
            <div class="card-body">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Note <span style="color: red;"> *</span></label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="note" required maxlength="2000"></textarea>
                  <span style="color: red">@error('note'){{ $message }}@enderror</span>
                </div>
              </div>
            <div>
   
              <button name="submit" class="btn btn-success" type="submit">Submit</button>
        </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer -->
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
    </form>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

  <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Note List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="myTable" class="table table-bordered data-table">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Created At</th>
                    <th>Author</th>
                    <th>Notes</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($lead->leadNotes as $leads)
                <tr>
                  <th>{{ $leads->id }}</th>
                  <th>{{ $leads->created_at }}</th>
                  <th>{{ $leads->user->name }}</th>
                  <th>{{ $leads->note }}</th>
                </tr>
                @endforeach
              </tbody>
          </table>
          <a href="{{ route('lead-view') }}" class="btn btn-success">Back</a>
        </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection