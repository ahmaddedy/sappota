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
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{route('web')}}">
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
                  src="{{asset('monster-new/assets/images/sappota-icon.png')}}"
                  alt="homepage"
                  class="light-logo"
                  height="10px"
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
                  src="{{asset('monster-new/assets/images/sappota-text.png')}}"
                  class="light-logo"
                  alt="homepage"
                  height="10px"
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
              class="topbartoggler d-block d-md-none waves-effect waves-light"
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
              <li class="nav-item d-none d-md-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i data-feather="arrow-left-circle" class="feather-sm"></i></a>
              </li>
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  id="2"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="message-square" class="feather-sm"></i>
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
                  </ul>
                </div>
              </li> -->
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- mega menu -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown mega-dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="{{route('web')}}"
                  title="Kembali Ke Dashboard"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class=""
                    ><i data-feather="bar-chart-2" class="feather-sm"></i
                  ></span>
                  Kembali Ke Dashboard
                </a>
              </li> -->
              <!-- ============================================================== -->
              <!-- End mega menu -->
              <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li
                class="nav-item search-box d-none d-md-flex align-items-center"
              >
              </li>
              <li
                class="nav-item search-box d-none d-md-flex align-items-center"
              >
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  {{strtoupper(Auth()->user()->nama)}}
                  <!-- <img
                    src="{{asset('monster-new/assets/images/img1.jpg')}}"
                    alt="user"
                    width="30"
                    class="profile-pic rounded-circle"
                  /> -->
                </a>
                <div
                  class="dropdown-menu dropdown-menu-end user-dd animated flipInY"
                >
                  <div
                    class="d-flex no-block align-items-center p-3 bg-info text-white mb-2"
                  >
                    <div class="">
                      <!-- <img
                        src="{{asset('monster-new/assets/images/img1.jpg')}}"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                      /> -->
                    </div>
                    <div class="ms-2">
                      <h4 class="mb-0 text-white">{{auth()->user()->nama}}</h4>
                      <p class="mb-0">{{auth()->user()->jabatan}}</p>
                    </div>
                  </div>
                  <a href="{{route('master-user.reset', ['id'=>auth()->user()->id])}}" class="dropdown-item">Reset Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <i
                      data-feather="log-out"
                      class="feather-sm text-danger me-1 ms-1"
                    ></i>{{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  <div class="dropdown-divider"></div>
                  <!-- <div class="pl-4 p-2">
                    <a href="#" class="btn d-block w-100 btn-info rounded-pill"
                      >View Profile</a
                    >
                  </div> -->
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
              <li>
                <!-- User profile -->
                <div
                  class="user-profile text-center position-relative pt-4 mt-1"
                >
                  <!-- User profile image -->
                  <div class="profile-img m-auto">
                    <!-- <img
                      src="{{asset('monster-new/assets/images/img1.jpg')}}"
                      alt="user"
                      class="w-100 rounded-circle"
                    /> -->
                  </div>
                  <!-- User profile text-->
                  <div class="profile-text py-1">
                    <a
                      href="#"
                      class="dropdown-toggle link u-dropdown"
                      data-bs-toggle="dropdown"
                      role="button"
                      aria-haspopup="true"
                      aria-expanded="true"
                      >{{strtoupper(Auth()->user()->nama)}} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i
                            data-feather="log-out"
                            class="feather-sm text-danger me-1 ms-1"
                          ></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      <div class="dropdown-divider"></div>
                      <!-- <div class="ps-4 p-2">
                        <button
                          type="button"
                          class="btn d-block w-100 btn-info rounded-pill"
                        >
                          View Profile
                        </button>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- End User profile text-->
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Menu Utama</span>
              </li>
              <!-- <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                  ><i data-feather="monitor" class="feather-icon"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li> -->
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('pengajuan')}}"
                  aria-expanded="false"
                  ><i data-feather="file-text" class="feather-icon"></i
                  ><span class="hide-menu">Pengajuan</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('surat-izin')}}"
                  aria-expanded="false"
                  ><i data-feather="mail" class="feather-icon"></i
                  ><span class="hide-menu">Surat Izin</span></a
                >
              </li>
              @hasanyrole('Admin')
                <li class="nav-small-cap">
                  <i class="mdi mdi-dots-horizontal"></i>
                  <span class="hide-menu">Menu Data Master</span>
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)"
                    aria-expanded="false"
                    ><i data-feather="file-text" class="feather-icon"></i
                    ><span class="hide-menu">Data Master </span>
                  </a>
                  <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                      <a 
                        href="{{route('master-faq')}}" 
                        class="sidebar-link"
                        ><i class="mdi mdi-octagram"></i
                        ><span class="hide-menu"> FAQ</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a 
                        href="{{route('master-user')}}" 
                        class="sidebar-link"
                        ><i class="mdi mdi-octagram"></i
                        ><span class="hide-menu"> User</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a 
                        href="{{route('master-sop')}}" 
                        class="sidebar-link"
                        ><i class="mdi mdi-octagram"></i
                        ><span class="hide-menu"> SOP</span>
                      </a>
                    </li>
                    <li class="nav-devider"></li> 
                  </ul>
                </li>
              @endhasrole
              
                  <!-- <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"
                      ><i class="mdi mdi-octagram"></i
                      ><span class="hide-menu"> Top 5 Satker</span></a
                    >
                  </li> -->
                  
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
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        @yield('page-title')
        @yield('main-content')
        
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
          &copy Dinas Lingkungan Hidup Pemerintah Kota Makassar
        </footer>
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
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('monster-new/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('monster-new/dist/js/app.min.js')}}"></script>
    <script src="{{asset('monster-new/dist/js/app.init.js')}}"></script>
    <script src="{{asset('monster-new/dist/js/app-style-switcher.js')}}"></script>
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
    @yield('js')
    <!-- ############################################################### -->
    <script src="{{asset('monster-new/dist/js/pages/dashboards/dashboard1.js')}}"></script>
    <script>
        
    </script>
  </body>
</html>
