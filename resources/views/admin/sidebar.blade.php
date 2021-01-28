<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{asset('assets/images/faces-clipart/pic-2.png')}}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">MDTU</span>
            <span class="text-secondary text-small">Admin</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <body data-spy="scroll" data-target="navbar" data-offset="50">
      <li class="nav-item">
          <a class="nav-link" href="{{route('admin.dashboard')}}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../courses">
            <span class="menu-title">Courses</span>
            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../target_groups">
              <span class="menu-title">Target_Group</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../departments">
              <span class="menu-title">Department</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="../../training_programs">
            <span class="menu-title">Training_programs</span>
            <i class="mdi mdi-calendar menu-icon"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../../employees">
            <span class="menu-title">Employees</span>
            <i class="mdi mdi-table-large menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../feedback">
            <span class="menu-title">Feedbacks</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-comment-check menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../users">
            <span class="menu-title">User</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-comment-check menu-icon"></i>
          </a>
        </li>
         </body>
    </ul>
  </nav>
     