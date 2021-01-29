<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>MYDNEX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">




<link rel="icon" href="{{ asset('images/icon.png')}}" sizes="192x192">

      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150478054-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150478054-1');
</script>
  </head>
 <body>

    
   @yield('content')
   	
   	
          <footer  id='footer' class="ftco-footer ftco-section" >
      <div class="container" >
        <div class="row">
          <div class="col-md-12 text-center">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">MYDNEX<span style='color: #ffb400;'>.</span>    <p style='font-size: medium;'><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
         </h2>
          
          </div>
        </div>
      </div>
    </footer>

    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('js/popper.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/aos.js')}}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('js/scrollax.min.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
  
  </body>
</html>

