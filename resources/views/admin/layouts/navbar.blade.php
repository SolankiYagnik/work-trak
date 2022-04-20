  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>  
    </ul>

    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{ auth()->user()->notifications->count() }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">{{ auth()->user()->notifications->count() }} Notifications</span>
          <div class="dropdown-divider"></div>
          @foreach (auth()->user()->notifications as $notification)
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>
            {{-- <span class="float-right text-muted text-sm"></span> --}}
            {{ $notification->data['name'] }} 
          </a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a href="{{ route('user.notify') }}" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      
      <li class="nav-item">
        <a>{{ Auth::user()->name }}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </li>
      <div class="btn-group">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"><li class="fas fa-sign-out-alt"></li></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </form>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->