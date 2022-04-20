    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('index') }}" class="brand-link">
          <img src="{{ asset('assets/dist/img/w.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Work Trak</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{asset('/storage/image/'.Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link {{ (request()->is('user/lead/view*')) ? 'active' : '' }} {{ (request()->is('user/lead/add*')) ? 'active' : '' }} {{ (request()->is('user/lead/edit*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-poll"></i>
                  <p>
                    Leads
                  </p>
                </a>
              </li>
            
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
</aside>