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
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('/')}}">MYDNEX<span>.</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item <?php if(empty($navIndex)){echo "";}else{ echo $navIndex ; } ?>"><a href="{{url('/')}}" class="nav-link">Accueil</a></li>
	        	<li class="nav-item <?php if(empty($navAbout)){echo "";}else{ echo $navAbout ; } ?>"><a href="{{url('/about')}}" class="nav-link">Qui sommes nous ?</a></li>
	        	<li class="nav-item <?php if(empty($navCauses)){echo "";}else{ echo $navCauses ; } ?>"><a href="{{url('/causes')}}" class="nav-link">Nos Rebelles!</a></li>
	        	<li class="nav-item <?php if(empty($navBlog)){echo "";}else{ echo $navBlog ; } ?>"><a href="{{url('/blog')}}" class="nav-link">Nos conseils 21th</a></li>
            
                <li class="nav-item <?php if(empty($navContact)){echo "";}else{ echo $navContact ; } ?>"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
          </ul>
          <div class="ml-auto">
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'INSCRIRE') }}</a>
                                </li>
                            @endif
                        @else
                         
                             
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Mon profil') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                               <a class="dropdown-item" href="{{ url('profil')}} ">
                                        {{'Mon profil'}}

                                    </a> <a class="dropdown-item" href="{{ route('home') }}">  
                                        {{ __('Messages') }}
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se Deconnecter') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            
          </div>
         
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
   @yield('content')
   	
   	
          <footer  id='footer' class="ftco-footer ftco-section">
      <div class="container">
        
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/main.js')}}"></script>
  
  </body>
</html>

