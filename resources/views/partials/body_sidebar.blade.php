<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{!! asset('theme/purple-admin-template/assets/images/faces/face1.jpg') !!}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
            <span class="text-secondary text-small">Project Manager</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Basic UI Elements</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div>
      </li> --}}
      @if($is_user->hasPermissionTo('view_category'))
      <li class="nav-item">
        <a class="nav-link" href="/category">
          <span class="menu-title">Category</span>
          <i class="mdi mdi-animation menu-icon"></i>
        </a>
      </li>
      @endif

      @if($is_user->hasPermissionTo('view_product'))
      <li class="nav-item">
        <a class="nav-link" href="/product">
          <span class="menu-title">Product</span>
          <i class="mdi mdi-cart menu-icon"></i>
        </a>
      </li>
      @endif
      @if($is_user->hasPermissionTo('view_role'))
      <li class="nav-item">
        <a class="nav-link" href="/role">
          <span class="menu-title">Role</span>
          <i class="mdi mdi-cart menu-icon"></i>
        </a>
      </li>
      @endif
      
      @if($is_user->hasPermissionTo('view_permission'))
      <li class="nav-item">
        <a class="nav-link" href="/permission">
          <span class="menu-title">Permission</span>
          <i class="mdi mdi-cart menu-icon"></i>
        </a>
      </li>
      @endif
      @if($is_user->hasPermissionTo('view_user'))
      <li class="nav-item">
        <a class="nav-link" href="/user">
          <span class="menu-title">User</span>
          <i class="mdi mdi-cart menu-icon"></i>
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="menu-title">Site Settings</span>
          <i class="mdi mdi-settings menu-icon"></i>
        </a>
      </li>
      <li class="nav-item sidebar-actions">
        <span class="nav-link">
          <div class="border-bottom">
            <h6 class="font-weight-normal mb-3">Projects</h6>
          </div>
          <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
          <div class="mt-4">
            <div class="border-bottom">
              <p class="text-secondary">Options</p>
            </div>
            <ul class="gradient-bullet-list mt-4">
              <li>Free</li>
              <li>Pro</li>
            </ul>
          </div>
        </span>
      </li>
    </ul>
  </nav>