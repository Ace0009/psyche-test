<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/pages/lock.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Dec 2021 09:21:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Psyche</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Bootstrap core CSS     -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />



  <!--  Material Dashboard CSS    -->
  <link href="{{ asset('assets/css/material-dashboard98f3.css?v=1.3.0') }}" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />


  <!--     Fonts and icons     -->
  <link href="../../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
  <!-- End Google Tag Manager -->
</head>

<body class="off-canvas-sidebar">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href=" #pablo ">Material Dashboard Pro</a>
    </div>
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        @if (Route::has('login'))
            @auth
            <li>
                <a href="{{ route('admin') }}">
                  <i class="material-icons">dashboard</i>
                  Dashboard
                </a>
              </li>
            @else
                <li class= "">
                    <a href="{{ route('register') }}">
                        <i class="material-icons">person_add</i>
                        Register
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class= "">
                        <a href="{{ route('login') }}">
                            <i class="material-icons">fingerprint</i>
                            Login
                        </a>
                    </li>
                @endif
            @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>


<div class="wrapper wrapper-full-page">
  <div class="full-page lock-page" filter-color="black" data-image="../../assets/img/lock.jpg">

    <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->

    {{-- <div class="content">
      <form method="#" action="#">
        <div class="card card-profile card-hidden">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="avatar" src="../../assets/img/faces/avatar.jpg" alt="...">
            </a>
          </div>
          <div class="card-content">
            <h4 class="card-title">Tania Andrew</h4>
            <div class="form-group label-floating">
              <label class="control-label">Enter Password</label>
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-rose btn-round">Unlock</button>
          </div>
        </div>
      </form>
    </div> --}}

  </div>

</div>
</body>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>
{{--<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>--}}

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard98f3.js?v=1.3.0')}}"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

<script>
    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','../../../../../connect.facebook.net/en_US/fbevents.js');

    try{
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    }catch(err) {
        console.log('Facebook Track Error:', err);
    }

</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
    />
</noscript>





<script type="text/javascript">
    $().ready(function(){
        demo.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>





<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/pages/lock.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Dec 2021 09:21:33 GMT -->
</html>