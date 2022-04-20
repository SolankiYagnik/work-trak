@extends('admin.layouts.guest')
@section('contents')
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img src="{{ asset('assets/dist/img/w.png') }}" width="70px" alt="">
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"> <b> Sign in to Work Trak </b></p>
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-group mb-3">
      <input type="email" name="email" :value="old('email')" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
      @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
      @enderror
      {{-- <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div> --}}
    </div>
    <div class="input-group mb-3">
      <input type="password" name="password" :value="old('psasword')" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
      @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
      @enderror
      {{-- <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div> --}}
    </div>
    <div class="row">
      <div class="col-4">
        <button style="background-color: rgb(101, 168, 101); border-block-color: green;" type="submit" class="btn btn-primary btn-block">Sign In</button>
      </div>
    </div>
</form>
        </div>
    </div>
</div>
</body>
@endsection
