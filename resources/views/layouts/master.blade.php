<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('titre-admin')</title>
  <link rel="stylesheet" href="{{asset('admin/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style2.css')}}">
  <link rel="shortcut icon" href="{{asset('admin/images/logo-hopes.png')}}">
</head>
<body>
  <div class="container-scroller">
    @include('layouts.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @yield('right-sideBar')
      <!-- partial:partials/_sidebar.html -->
        @include('layouts.nav2')
      <!-- partial -->
      <div class="main-panel">
        @yield('contenu')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.footer')
        <!-- partial -->
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{asset('admin/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('admin/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/template.js')}}"></script>
  <script src="{{asset('admin/js/settings.js')}}"></script>
  <script src="{{asset('admin/js/todolist.js')}}"></script>
  <script src="{{asset('admin/js/dashboard.js')}}"></script>
  <script>
    let btn = document.querySelector('#btn');
   
      function suppr() {
        // e.preventDefault();
        var link = btn.getAttribute('href');
        alert('Voulez vous vraiment le supprimer ?');
      }
  </script>
</body>

</html>

