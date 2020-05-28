<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/logo-tecmotul22.png')}} " />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hackathon - @yield('title')</title>

    
   
    
   
<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Ruda&display=swap" rel="stylesheet"><!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ruda&display=swap" rel="stylesheet"> 
   <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap-file/css/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat-list.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles-hackathn-layout.css') }}" rel="stylesheet">


   <!-- Scripts -->   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="{{ asset('js/app.js') }}" ></script>


  <style>
  .cat{
  font-size: 25px;
  font-weight:bold;
  font-family: 'Ruda', sans-serif;
  }
  .card_proy{
width:80%;
}
   .button-hackathn3{
    border-radius: 10px;
    border: solid 2px #2ed38b;
    background: rgba(202, 202, 202, 0);
    color: #ffffff;

    height: 3em;
    margin-top: 0.4em;
  }
  .button-hackathn3:hover{
    border-radius: 10px;
    border: solid 2px #2ed38b;
    background: rgba(255, 255, 255, 0.226);
    color: #ffffff;

    height: 3em;
    margin-top: 0.5em;
  }
  .btn-nav-hackathn {
      border-radius: 8px;
      border: solid 1px #c0feff;
      background: rgba(202, 202, 202, 0);
      color: #ffffff;
      

    }

    .drop-down-nav-hackathn {
      margin-right: 2em;
    }
    @media screen and (max-width: 1100px) {

.card_proy{
width:100%;
}
.btn-nav-hackathn {
          display: none !important;

    }
  .drop-down-nav-hackathn {
    display: none !important;
  }

  .chat-card {
    width: 100%;
  }

  .proyecto-container {
    margin-left: 0em;
  }

  .info-alumno-container {
    margin-left: 0em;
  }

  .idea-card {
    width: 100%;
    height: 90%;
  }

  .tituloIdea {
    margin-bottom: 10px;
    height: 2em;
    font-family: 'Ruda', sans-serif;
  }

  .enviar-idea {
    margin-left: 3.8em;
  }

  .tec-m-logo {
    display: block;
  }
  .col-idea{
  
  margin-left: 3.5em;
  } 

}

@media screen and (min-width: 1000px) {
  .infoAlumno-no-movil {
    display: none !important;
  }

  .logout-nav-movil {
    display: none !important;

  }
}

    .sidebar[data-active-color="danger"] .nav li.active>a,
    .sidebar[data-active-color="danger"] .nav li.active>a i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a {
      color: #FFFFFF;
      opacity: 1;
    
    }

    body {
      background-image: url(' {{ asset('img/bg_app-min.jpg') }}');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
  </style>

     
     @livewireStyles
     
     @livewireScripts
     
     <script>
          function scroll(){
            $("#scroll").animate({ scrollTop: $('#scroll')[0].scrollHeight}, "fast");
          }
        </script>
        
</head>
<body onload="scroll()">
    <div class="wrapper ">
        <div class="sidebar"  data-active-color="danger">

          <div class="logo logos">
            <a href="http://www.itsmotul.edu.mx/" class="simple-text logo-mini">
              <div class="logo-image-large">
                <img src="{{ asset('img/TecNNM.png') }}" width="100px">
              </div>
            </a>
            <a style="color:#ffffff; " href="#" class="simple-text logo-normal">
              Tec Motul

            </a>
          </div>
          <div class="sidebar-wrapper logos">
            <ul class="nav">
              <li class="{{ request()->is('home') ? 'active' : '' }}" >
                <a href="{{route('home')}}">
                  <i class="nc-icon nc-bank"></i>
                  <p class="slider-label">Inicio</p>
                </a>
              </li>
             <!--- <li class="{{ request()->is('infoAlumno') ? 'active' : '' }}">
                <a href="{{route('infoAlumno')}}">
                  <i class="nc-icon nc-single-02"></i>
                  <p class="slider-label">Perfil </p>
                  <p class="proyecto">{{ auth()->user()->name}}</p> --->

                </a>
              </li>
              <li class="{{ request()->is('proyecto') ? 'active' : '' }}" >
                <a href="{{route('proyecto')}}">
                  <i class="nc-icon nc-laptop"></i>
                  <p class="slider-label">Proyecto</p>
                  <!-- <p class="proyecto">Trip-On</p> -->
                </a>
              </li>
              <li class="{{ request()->is('ideas') ? 'active' : '' }}">
                <a href="{{route('ideas')}}">
                  <i class="nc-icon nc-bulb-63"></i>
                  <p class="slider-label">Ideas</p>
                  <!-- <p class="proyecto">Trip-On</p> -->
                </a>
              </li>
              <li class="{{ request()->is('chat') ? 'active' : '' }}">
                <a href="{{route('chat')}}">
                  <i class="nc-icon nc-chat-33"></i>

                  <p class="slider-label">chat</p>
                  <!-- <p class="proyecto">Trip-On</p> -->
                </a>
              </li>
             <!----- <li class="{{ request()->is('chat') ? 'active' : '' }}">
                <a href="{{route('chat')}}">
                  <div class="card-miembros-side">
                  <i class="nc-icon nc-chat-33"></i>
                  <p class="slider-label">compañeros</p>
                  <div class="container">
                  livewire("miembros") 
                </div>     
                </div>
                </a>

                </li> --->
                <div class="collapse navbar-collapse " id="example-navbar-profile">
                  <ul class="navbar-nav ml-auto">
                   
                    <li class="nav-item">
                      <a class="nav-link" href="#pablo">
                        <i class="now-ui-icons users_circle-08"></i>
                        <p>Profile</p>
                      </a>
                    </li>
                    <li class="nav-item dropdown nav-item-image">
                      <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <div class="">
                          <img src="assets/img/avatar.jpg" alt="">
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-header">Dropdown header</a>
                        <a class="dropdown-item" href="#">Cerrar sesión</a>
                       
                      </div>
                    </li>
                  </ul>
                </div>
              
              
  <li class="infoAlumno-no-movil {{ request()->is('infoAlumno') ? 'active' : '' }}">
                <a href="{{route('infoAlumno')}}">
                  <i class="nc-icon nc-single-02"></i>
                  <p class="slider-label">Perfil </p>
                  <p class="proyecto">{{ auth()->user()->name}}</p> 

                </a>
              </li>


            </ul>
            

          </div>

        </div>
        <div class="main-panel">
          <!-- Navbar -->
           <nav class="navbar navbar-expand-lg navbar-absolute fixed-top  logos">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <a class="navbar-brand" href="#pablo"> 
                  Hackathon 2020
               </a>
                <a > </a>
              </div>
          <a class="logout-nav-movil" href="{{ url('/logout') }}">Cerrar sesión</a>


          </div>
          <!-- Split dropleft button -->
          <!-- Split dropleft button -->
        <div class="btn-group drop-down-nav-hackathn">
          <div class="btn-group dropleft" role="group">
            <button type="button" class=" btn-nav-hackathn  dropdown-toggle dropdown-toggle-split"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropleft</span>
            </button>
            <div class="dropdown-menu col-sm-12">
              <!-- Dropdown menu links -->
              <a class="dropdown-item pc" href="{{ url('/infoAlumno') }}">Ver perfil</a>
              <a class="dropdown-item pc" href="{{ url('/logout') }}">Cerrar Seión</a>
            </div>
          </div>
          <button type="button" class="btn-nav-hackathn col-lg-12">

            <a href="{{route('infoAlumno')}}">
              <p>{{auth()->user()->name}}</p>
            </a>
          </button></a>
        </div>


      </nav>
          <!-- End Navbar -->
          <!-- <div class="panel-header panel-header-lg">

      <canvas id="bigD
          <!-- End Navbar -->
          <!-- <div class="panel-header panel-header-sm">


    </div> -->
 @yield('content')
 <script src="{{asset('js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
 

</body>
</html>

