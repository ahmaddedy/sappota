
<!DOCTYPE html>
<html dir="ltr">
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
    <title>Sappota' | Login</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/monsteradmin/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset('monster/assets/images/logo-dash.png')}}"
    />
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
    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        "
        style="
          background: url(../assets/images/background/login-register.jpg)
            no-repeat center center;
          background-size: cover;
        "
      >
        <div class="auth-box p-4 bg-white rounded">
          <div id="loginform">
            <div class="logo">
              <h3 class="box-title mb-3">Sign In</h3>
            </div>
            <!-- Form -->
            <div class="row">
              <div class="col-12">
                <form
                  class="form-horizontal mt-3 form-material"
                  id="loginform"
                   action="{{ route('login') }}"
                   method="post"
                >
                @csrf
                  <div class="form-group mb-3">
                    <div class="">
                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
                    </div>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group mb-4">
                    <div class="">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="form-group text-center mt-4 mb-3">
                    <div class="col-xs-12">
                      <button
                        class="
                          btn btn-info
                          d-block
                          w-100
                          waves-effect waves-light
                        "
                        type="submit"
                      >
                        Log In
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div id="recoverform">
            <div class="logo">
              <h3 class="font-weight-medium mb-3">Recover Password</h3>
              <span class="text-muted"
                >Enter your Email and instructions will be sent to you!</span
              >
            </div>
            <div class="row mt-3 form-material">
              <!-- Form -->
              <form class="col-12" action="index.html">
                <!-- email -->
                <div class="form-group row">
                  <div class="col-12">
                    <input
                      class="form-control"
                      type="email"
                      required=""
                      placeholder="Username"
                    />
                  </div>
                </div>
                <!-- pwd -->
                <div class="row mt-3">
                  <div class="col-12">
                    <button
                      class="btn d-block w-100 btn-primary text-uppercase"
                      type="submit"
                      name="action"
                    >
                      Reset
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('monster-new/dist/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('monster-new/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      // ==============================================================
      // Login and Recover Password
      // ==============================================================
      $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
      });
    </script>
  </body>
</html>
