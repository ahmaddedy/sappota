<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="Sappota, sayang pohon, Dinas Lingkungan Hidup Kota Makassar, pohon"
    />
    <meta
      name="description"
      content="Aplikasi Pengajuan Pelayanan Terkait Pohon-Pohon di Kota Makassar"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield('title','Sappota')</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/monsteradmin/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset('monster-new/assets/images/sappota-icon.png')}}"
    />
    <!-- Custom CSS -->
    @yield('css')
    <!-- Custom CSS -->
    <link href="{{asset('monster-new/dist/css/style.min.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-lg navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-lg-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="{{asset('monster-new/assets/images/sappota-icon.png')}}"
                  alt="homepage"
                  class="dark-logo"
                  height="50px"
                />
                <!-- Light Logo icon -->
                <img
                  src="../../assets/images/logo-light-icon.png"
                  alt="homepage"
                  class="light-logo"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img
                  src="{{asset('monster-new/assets/images/sappota-text.png')}}"
                  alt="homepage"
                  class="dark-logo"
                  height="47px"
                />
                <!-- Light Logo text -->
                <img
                  src="../../assets/images/logo-light-text.png"
                  class="light-logo"
                  alt="homepage"
                />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-lg-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
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
            <ul class="navbar-nav me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="icon-arrow-left-circle"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  id="2"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="mail" class="feather-sm"></i>
                  <div class="notify">
                    <span class="heartbit"></span> <span class="point"></span>
                  </div>
                </a>
                <div
                  class="dropdown-menu mailbox dropdown-menu-start dropdown-menu-animate-up"
                  aria-labelledby="2"
                >
                  <ul class="list-style-none">
                    <li>
                      <div class="border-bottom rounded-top py-3 px-4">
                        <div class="mb-0 font-weight-medium fs-4">
                          You have 4 new messages
                        </div>
                      </div>
                    </li>
                    <li>
                      <div
                        class="message-center message-body position-relative"
                        style="height: 230px"
                      >
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/1.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle online"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                              Pavan kumar
                            </h5>
                            <span
                              class="fs-2 text-nowrap d-block time text-truncate fw-normal mt-1"
                              >Just see the my admin!</span
                            >
                            <span
                              class="fs-2 text-nowrap d-block subtext text-muted"
                              >9:30 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/2.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle busy"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                              Sonu Nigam
                            </h5>
                            <span
                              class="fs-2 text-nowrap d-block time text-truncate"
                              >I've sung a song! See you at</span
                            >
                            <span
                              class="fs-2 text-nowrap d-block subtext text-muted"
                              >9:10 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/3.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle away"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                              Arijit Sinh
                            </h5>
                            <span
                              class="fs-2 text-nowrap d-block time text-truncate"
                              >I am a singer!</span
                            >
                            <span
                              class="fs-2 text-nowrap d-block subtext text-muted"
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/4.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle offline"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                              Pavan kumar
                            </h5>
                            <span
                              class="fs-2 text-nowrap d-block time text-truncate"
                              >Just see the my admin!</span
                            >
                            <span
                              class="fs-2 text-nowrap d-block subtext text-muted"
                              >9:02 AM</span
                            >
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a
                        class="nav-link border-top text-center text-dark pt-3"
                        href="javascript:void(0);"
                      >
                        <b>See all e-Mails</b> <i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
            </ul>

            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li
                class="nav-item search-box d-none d-md-flex align-items-center"
              >
                <a href="{{route('login')}}" class="btn btn-success">Login Admin</a>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Buat Permohonan</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('/')}}"
                  aria-expanded="false"
                  ><i data-feather="clipboard" class="feather-icon"></i
                  ><span class="hide-menu">Buat Permohonan</span></a
                >
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="home" class="feather-icon"></i
                  ><span class="hide-menu">Home</span></a
                >
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">FAQ</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('faq')}}"
                  aria-expanded="false"
                  ><i data-feather="book-open" class="feather-icon"></i
                  ><span class="hide-menu">FAQ</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">

        @yield('page-title')
        @yield('main-content')
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">Dinas Lingkungan Hidup Pemerintah Kota Makassar</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('monster-new/dist/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('monster-new/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('monster-new/dist/js/app.min.js')}}"></script>
    <script src="{{asset('monster-new/dist/js/app.init.horizontal.js')}}"></script>
    <script src="{{asset('monster-new/dist/js/app-style-switcher.horizontal.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('monster-new/dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('monster-new/dist/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('monster-new/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('monster-new/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('monster-new/dist/js/feather.min.js')}}"></script>
    <script src="{{asset('monster-new/dist/js/custom.min.js')}}"></script>
    <!-- ############################################################### -->
    <!-- This Page Js Files Here -->
    <!-- ############################################################### -->
    <script src="{{asset('monster-new/dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('monster-new/dist/js/pages/dashboards/dashboard1.js')}}"></script>

    @yield('js')
  </body>
</html>
