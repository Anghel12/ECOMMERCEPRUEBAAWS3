<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>Dashboard eCommerce</title>

  
    <link href="{{ asset('libs/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet" />
     

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">


    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/feather-webfont/dist/feather-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/simplebar/dist/simplebar.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
 function gtag() {
    dataLayer.push(arguments);
 }
 gtag("js", new Date());

 gtag("config", "G-M8S4MT3EYG");
    </script>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
    c[a] =
       c[a] ||
       function () {
          (c[a].q = c[a].q || []).push(arguments);
       };
    t = l.createElement(r);
    t.async = 1;
    t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
 })(window, document, "clarity", "script", "kuc8w5o9nt");
    </script>

</head>

<body>
  
    @auth

        @livewire('admin.e-commerce.navigation.navbar-index')
        @livewire('home.e_commerce.modal.cart')

        <div class="main-wrapper">
            <!-- navbar vertical -->
   
        @livewire('admin.e-commerce.navigation.vertical-navbar-index')
        @livewire('admin.e-commerce.navigation.cell-navbar-index')

        {{-- <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8"></div> --}}
        @if (session('info'))
        <div class="alert alert-success">
          <strong> {{session('info')}} </strong>
        </div>
        @endif
            {{ $slot }}
     
        {{-- ... --}}
    </div>
    {{-- ... --}}

    @stack('modals')

    @livewireScripts

    @endauth

</body>

<!-- Javascript-->

<!-- Libs JS -->
      <!-- Libs JS -->
<!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->

<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Theme JS -->

<script src="{{ asset('js/theme.min.js') }}"></script>



<script src="{{ asset('libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('js/vendors/editor.js') }}"></script>

<script src="{{ asset('libs/dropzone/dist/min/dropzone.min.js') }}"></script>

<script src="{{ asset('js/vendors/dropzone.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('js/theme.min.js') }}"></script>

<script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/vendors/chart.js') }}"></script>
     
<script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

<script>
  $(document).ready( function() {
     $("#name").stringToSlug({
       setEvents: 'keyup keydown blur',
       getPut: '#slug',
       space: '-'
     });
   });
</script>

</html>