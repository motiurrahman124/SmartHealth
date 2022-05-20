<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{route('add_doctor')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Doctor
              </p>
            </a>
            </li>

            <li class="nav-item">
            <a href="{{route('dr_list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Doctor list
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="{{route('appoinment_list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Appoinment list
              </p>
            </a>
          </li>
          
            <li class="nav-item mr-5 ml-5">
            <a href="{{route('logout_admin')}}" class="nav-link btn btn-danger ">
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>