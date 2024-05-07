<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{ asset('libs/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/tiny-slider/dist/tiny-slider.css') }}">


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/feather-webfont/dist/feather-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/simplebar/dist/simplebar.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
{{--     <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
{{--     @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    @livewireStyles

</head>

<body>
    <div class="">
        @livewire('home.e_commerce.navigation.nav-bar')
        @livewire('home.e_commerce.modal.cart')
        @auth

        @else
        @livewire('home.e_commerce.modal.login')
        @livewire('home.e_commerce.modal.register')
        @endauth


        {{-- <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8"></div> --}}
        <div>
            @if (session('info'))
            <div class="alert alert-success">
              <strong> {{session('info')}} </strong>
            </div>
            @endif
            {{ $slot }}
        </div>
        {{-- ... --}}
    </div>
    {{-- ... --}}

    @stack('modals')

    @livewireScripts

    @livewire('home.e_commerce.footer.footer')

</body>

	<!-- Javascript-->

		<!-- Libs JS -->
        <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>
        
        <!-- Theme JS -->
        
        <script src="{{ asset('js/theme.min.js') }}"></script>
        

		<script src="js/vendors/jquery.min.js"></script>
		<script src="js/vendors/countdown.js"></script>
		<script src="libs/slick-carousel/slick/slick.min.js"></script>
		<script src="js/vendors/slick-slider.js"></script>
		<script src="libs/tiny-slider/dist/min/tiny-slider.js"></script>
		<script src="js/vendors/tns-slider.js"></script>
		<script src="js/vendors/zoom.js"></script>

</html>