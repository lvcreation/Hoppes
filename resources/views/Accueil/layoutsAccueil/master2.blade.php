<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="hopes">
    <link rel="stylesheet" href="{{asset('clientSHop/css/all.cs')}}s">
    <link rel="stylesheet" href="{{asset('clientSHop/css/bootstrap.min.css')}}">
    <!-- <script src="public/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9WavUqTflNBS6-Z2eRM8M--Frlde7WTg&libraries=places&callback=initMap&v=weekly"
      async defer></script>
      <title>@yield('titre-acceueil')</title>
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="stylesheet" href="{{asset('clientSHop/fontawesome-free-6.1.1-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('clientSHop/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('clientSHop/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/fontPro6/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('client/css/tailwind.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hopes-formation</title>
  </head>

  <body>

    <!-- HEADER  -->
    {{-- @include('Accueil.layoutsAccueil.header') --}}
    @yield('contenu')
    {{-- @include('Accueil.layoutsAccueil.footer') --}}
    
    <div class="anim-menu"></div>
    <div class="anim-menu2"></div>

    <!-- <script src='public/js/jquery.min.js'></script> -->
    <script src='{{asset('clientSHop/js/swiper-bundle.min.js')}}'></script>
    <script src="{{asset('clientSHop/fontawesome-free-6.1.1-web/js/all.min.js')}}"></script>
    <script src="{{asset('clientSHop/js/localisation.js')}}"></script>
    <script src="{{asset('clientSHop/js/social.icon.js')}}"></script>
    <script src="{{asset('clientSHop/js/app.js')}}"></script>
    <script src="{{asset('clientSHop/js/all.js')}}"></script>
    <script src="{{asset('clientSHop/minified/gsap.min.js')}}"></script>
    <script src="{{asset('clientSHop/minified/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('clientSHop/minified/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('clientSHop/js/extrait.js')}}"></script>
    <script src="{{asset('client/fontPro6/js/all.js')}}"></script>
    <script type="module" src="{{asset('clientSHop/js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
  </body>

</html>