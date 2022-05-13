<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BKC Antiques and Auctions - admin </title>
    <base href="{{asset('')}}">

    <!-- Bootstrap -->
    <link href="{{asset('admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_asset/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin_asset/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin_asset/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin_asset/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          @if(count($errors) > 0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $err)
                {{$err}}<br>
              @endforeach
            </div>
          @endif
            <form action="{{url('user/ad_login')}}" method="POST">
            @csrf
              <h1>Login - admin</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Email" required/>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required/>
              </div>
              <div>
                <button type="submit">Login</button>
                <!-- <a class="btn btn-default submit" href="">Log in</a> -->
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>
            </form>
            <div class="clearfix"></div>
            <div class="separator">
              <p class="change_link">New to site?
                <a href="user/ad_login#signup" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-gears"></i> BKC Antiques and Auctions</h1>
                <p>BKC Antiques and Auctions</p>
              </div>
            </div>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account - admin</h1>
              <div>
                <input type="text" class="form-control" placeholder="Full Name" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone number" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="date" class="form-control" placeholder="Date" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="user/ad_login#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gears"></i> BKC Antiques and Auctions</h1>
                  <p>BKC Antiques and Auctions</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
