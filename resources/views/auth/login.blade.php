<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Masuk - DPMS</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('templates/horizontal/assets/images/favicon.ico')}}" />
    <!-- App css -->
    <link
      href="{{asset('templates/horizontal/assets/css/bootstrap.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link href="{{asset('templates/horizontal/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link
      href="{{asset('templates/horizontal/assets/css/metismenu.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link href="{{asset('templates/horizontal/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  </head>
  <body class="account-body">
    <!-- Log In page -->
    <div class="row vh-100">
      <div class="col-lg-3 pr-0">
        <div class="card mb-0 shadow-none">
          <div class="card-body">
            <div class="px-3">
              <div class="media">
                <a href="index.html" class="logo logo-admin"
                  ><img
                    src="{{asset('templates/horizontal/assets/images/logo-sm.png')}}"
                    height="55"
                    alt="logo"
                    class="my-3"
                /></a>
                <div class="media-body ml-3 align-self-center">
                  <h4 class="mt-0 mb-1">Login</h4>
                  <p class="text-muted mb-0">
                    Masuk Dashboard.
                  </p>
                </div>
              </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
              <form class="form-horizontal my-4" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"
                        ><i class="fas fa-user font-16"></i></span>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      name="username"
                      id="username"
                      placeholder="Masukan username"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label for="userpassword">Password</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon2"
                        ><i class="fas fa-key font-16"></i></span>
                    </div>
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      id="userpassword"
                      placeholder="Masukan password"
                    />
                  </div>
                </div>
                <div class="form-group row mt-4">
                  <div class="col-sm-6">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customControlInline"
                        name="remember"
                      />
                      <label
                        class="custom-control-label"
                        for="customControlInline"
                        >Remember me</label
                      >
                    </div>
                  </div>
                  <div class="col-sm-6 text-right">
                    <a
                      href="#"
                      class="text-muted font-13"
                      ><i class="mdi mdi-lock"></i> Lupa password?</a
                    >
                  </div>
                </div>
                <div class="form-group mb-0 row">
                  <div class="col-12 mt-2">
                    <button
                      class="btn btn-primary btn-block waves-effect waves-light"
                      type="submit"
                    >
                      Masuk <i class="fas fa-sign-in-alt ml-1"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            {{-- <div class="account-social text-center">
              <h6 class="my-4">Or Login With</h6>
              <ul class="list-inline mb-4">
                <li class="list-inline-item">
                  <a href="auth-login.html" class=""
                    ><i class="fab fa-facebook-f facebook"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a href="auth-login.html" class=""
                    ><i class="fab fa-twitter twitter"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a href="auth-login.html" class=""
                    ><i class="fab fa-google google"></i
                  ></a>
                </li>
              </ul>
            </div>
            <div class="m-3 text-center bg-light p-3 text-primary">
              <h5 class="">Don't have an account ?</h5>
              <p class="font-13">Join <span>Frogetor</span> Now</p>
              <a
                href="auth-login.html#"
                class="btn btn-primary btn-round waves-effect waves-light"
                >Free Resister</a
              >
            </div> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-9 p-0 d-flex justify-content-center">
        <div class="accountbg d-flex align-items-center">
          <div class="account-title text-white text-center">
            <img src="{{asset('templates/horizontal/assets/images/logo-sm.png')}}" alt="" class="thumb-sm" />
            <h4 class="mt-3">Selamat Datang</h4>
            <div class="border w-25 mx-auto border-primary"></div>
            {{-- <h1 class="">Let's Get Started</h1> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- End Log In page --><!-- jQuery  -->
    <script src="{{asset('templates/horizontal/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('templates/horizontal/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('templates/horizontal/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('templates/horizontal/assets/js/waves.min.js')}}"></script>
    <script src="{{asset('templates/horizontal/assets/js/jquery.slimscroll.min.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('templates/horizontal/assets/js/app.js')}}"></script>
  </body>
</html>
