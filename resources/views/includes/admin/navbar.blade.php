<!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
          <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
              <!-- Logo icon -->
              <a href="index.html">
                <b class="logo-icon">
                  <!-- Dark Logo icon -->
                  <img
                    src="{{url('backend/assets/images/sijupi.png')}}"
                    alt="homepage"
                    height="48px"
                    class="dark-logo"
                  />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                  <!-- dark Logo text -->
                  <!-- <span
                    style="margin-bottom: -10px; font-size: 32px; color: #000"
                    ><b>SI</b> Jupi</span
                  > -->
                  <img
                    src="{{url('backend/assets/images/SI JUPI.png')}}"
                    alt="homepage"
                    height="24px"
                    class="dark-logo"
                  />
                </span>
              </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ti-more"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1"></ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="javascript:void(0)"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><span class="ml-2 d-none d-lg-inline-block"
                    ><span class="text-light">Hello,</span>
                    <span class="text-light" style="font-weight: bold"
                      >Jason Doe</span
                    ></span
                  >&nbsp;&nbsp;&nbsp;&nbsp;
                  <img
                    src="{{url('backend/assets/images/users/profile-pic.jpg')}}"
                    alt="user"
                    class="rounded-circle"
                    width="50"
                  />
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right user-dd animated flipInY"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i data-feather="user" class="svg-icon mr-2 ml-1"></i> My
                    Profile</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i
                      data-feather="credit-card"
                      class="svg-icon mr-2 ml-1"
                    ></i>
                    My Balance</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i data-feather="mail" class="svg-icon mr-2 ml-1"></i>
                    Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                    Account Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                    Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="pl-4 p-3">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info"
                      >View Profile</a
                    >
                  </div>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->