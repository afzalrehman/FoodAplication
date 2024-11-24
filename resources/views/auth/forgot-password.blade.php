<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Qasim</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png">
  <!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/metismenu/mm-vertical.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}">
  <!--bootstrap css-->
  <link rel="stylesheet" href="{{asset('assets/plugins/notifications/css/lobibox.min.css')}}">

  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('sass/main.css')}}" rel="stylesheet">
  <link href="{{asset('sass/dark-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/blue-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/semi-dark.css')}}" rel="stylesheet">
  <link href="{{asset('sass/bordered-theme.css')}}" rel="stylesheet">
  <link href="{{asset('sass/responsive.css')}}" rel="stylesheet">


  </head>

<body>


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">

          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
            <div class="card-body">
              <img src="assets/images/auth/reset-password1.png" class="img-fluid auth-img-cover-login" width="550" alt="">
            </div>
          </div>

        </div>
        
        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
           
          <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
            <div class="card-body p-sm-5">
                @include('_message')
              <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
              <h4 class="fw-bold">Forgot Password?</h4>
              <p class="mb-0">Enter your registered email ID to reset the password</p>

              <div class="form-body mt-4">
                <form class="row g-4" method="POST" action="{{url('password/reset')}}">
                    @csrf
                  <div class="col-12">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    <span style="color: red">{{$errors->first('email')}}</span>
                  </div>
                  <div class="col-12">
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-info">Send</button>
                       <a href="{{url('login')}}" class="btn btn-light">Back to Login</a>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

  <!--authentication-->




  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>