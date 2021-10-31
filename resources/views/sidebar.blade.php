<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ url('lte/login/images/learning1.png') }}" alt="pegawaiLTE Logo" class="brand-image"
           style="opacity: .8"><br>
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img src="{{ url('lte/Login/images/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/') }}" class="d-block">{{ session('session_nama_guru') }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{url('users')}}" class="nav-link text-white {{ Request::is('users') ? 'active':'' }}">
              <i class="fas fa-home mr-1"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('agent')}}" class="nav-link text-white {{ Request::is('agent') ? 'active':'' }}">
              <i class="fas fa-home mr-1"></i>
              <p>
                Agent
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('customer')}}" class="nav-link text-white {{ Request::is('customer') ? 'active':'' }}">
              <i class="fas fa-home mr-1"></i>
              <p>
                Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('product')}}" class="nav-link text-white {{ Request::is('product') ? 'active':'' }}">
              <i class="fas fa-home mr-1"></i>
              <p>
                Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('orders')}}" class="nav-link text-white {{ Request::is('orders') ? 'active':'' }}">
              <i class="fas fa-home mr-1"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('laporan')}}" class="nav-link text-white {{ Request::is('laporan') ? 'active':'' }}">
              <i class="fas fa-home mr-1"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
                       {{-- <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                  <i class="fas fa-lock mr-1"></i>
                  <p>
                      Logout
                  </p>
              </a>
            </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf --}}
              </form>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
