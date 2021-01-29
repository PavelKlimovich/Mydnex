<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
<link rel="stylesheet" href="{{ asset('css/datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="icon" href="{{ asset('images/icon.png')}}" sizes="192x192">
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background:#000000 !important; ">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('/')}}">MYDNEX<span>.</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Menu
                    </button>
                         <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/')}}" class="nav-link">Accueil</a>
                            <a class="dropdown-item" href="{{url('/about')}}" class="nav-link">Qui sommes nous ?</a>
                            <a class="dropdown-item" href="{{url('/causes')}}" class="nav-link">Nos Rebelles!</a>
                            <a class="dropdown-item" href="{{url('/blog')}}" class="nav-link">Nos conseils 21th</a>
                            <a class="dropdown-item" href="{{url('/contact')}}" class="nav-link">Contact</a>
                         </div>
                 </div>
            </ul>
	        
          <div class="ml-auto">
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item <?php if(empty($nav)){echo "";}else{ echo $nav ; } ?>">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item <?php if(empty($navR)){echo "";}else{ echo $navR ; } ?>">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'INSCRIRE') }}</a>
                                </li>
                            @endif
                        @else
                         <li class="nav-item <?php if(empty($navDashbord)){echo "";}else{ echo $navDashbord ; } ?>">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Messages') }}</a>
                            </li>
                             <li class="nav-item <?php if(empty($navProfil)){echo "";}else{ echo $navProfil ; } ?>">
                                <a class="nav-link" href="{{ route('profil')}} ">{{ __('Mon profil') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    
        

        <main class="py-4" style="margin-top: 150px;">
            @yield('content')
        </main>
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
  <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('js/bouton.js')}}"></script>
  
  
</body>
</html>
