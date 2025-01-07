<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
      <!-- Logo -->
      <a class="font-semibold text-dual" href="/">
        <span class="smini-visible">
          <i class="fa fa-circle-notch text-primary"></i>
        </span>
        <span class="smini-hide fs-5 tracking-wider">
          <!-- <img src="{{ asset('media/logo.jpg') }}" alt="Logo" class="logo"> -->
          <h1 class="logo-title fw-black text-primary">{{ config('app.name') }}</h1>
        </span>
      </a>
      <!-- END Logo -->

      <!-- Extra -->
      <div>
        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
          <i class="fa fa-fw fa-times"></i>
        </a>
        <!-- END Close Sidebar -->
      </div>
      <!-- END Extra -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
      <!-- Side Navigation -->
      <div class="content-side">
        <ul class="nav-main">
              
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            
            <!-- <li class="nav-main-item open">
              <a class="nav-main-link" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon fa fa-table"></i>
                <span class="nav-main-link-name">Admin</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link{{ request()->is('admin/users*') ? ' active' : '' }}" href="{{ route('admin.users') }}">
                    <span class="nav-main-link-name">Users</span>
                  </a>
                </li>
              </ul>
            </li> -->

        </ul>
      </div>
    </div>
    <!-- END Sidebar Scrolling -->
  </nav>
  <!-- END Sidebar -->