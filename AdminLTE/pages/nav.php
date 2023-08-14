<!-- <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div> -->



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.php" class="brand-link">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Northbrook University</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Matthew Adeniyi</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa fa-home"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-graduation-cap"></i>
            <p>
              Manage Students
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../pages/registerguardian.php" class="nav-link">

                <i class="far fa-circle nav-icon"></i>
                <p>Register Guardians</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../pages/registerstudent.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register Students</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../pages/allstudents.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Students</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-plus"></i>
            <p>
              Staff Management
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addstaff.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New Staff</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../pages/allstaff.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Staff</p>
              </a>
            </li>



          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-clipboard"></i>
            <p>
              Class Management
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../pages/classmanagement/CatArm.php" class="nav-link">

                <i class="far fa-circle nav-icon"></i>
                <p>Category/Arm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../pages/classmanagement/class.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Classes</p>
              </a>
            </li>
          </ul>



        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-subscript"></i>
            <p>
              Subject info
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addsubject.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create/View Subjects</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="assignsubject.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Subject Teachers</p>
              </a>
            </li>


          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-subscript"></i>
            <p>
              Results Mgm
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Students Result</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Class Results</p>
              </a>
            </li>


          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-toolbox"></i>
            <p>
              School Settings
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Result Settings</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Permission Setup</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General Setup</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registration Slots</p>
              </a>
            </li>


          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-money-bill-wave-alt"></i>
            <p>
              Managemant Promotions
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-sticky-note"></i>
            <p>
              School fees Control
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Fee Category</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Set School Fees</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Levy Payment Report
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Student Result
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              My Profile
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
        <li class="nav-item">
          <a href="#" class="nav-link">
          
            
            <form method="POST" action="logout.php">
              <button type="submit" name="Logout"><i class="nav-icon fas fa-chart-pie"></i>
                <p>Log Out</p>
              </button>
            </form>
          </a>

          <i class="right-fas fa-angle-left"></i>
        </li>

        </li>

        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>