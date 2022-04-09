<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

        

        <script src="{{ asset('js/app.js') }}" defer></script>
   
        <!-- Styles -->
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap" rel="stylesheet">
        <link href="assets/css/theme.css" rel="stylesheet" />
        <link href="assets/css/user.css" rel="stylesheet" />


    </head>
    <body id="app">

        @include('components.nav')
        <main class="main" id="top">
           
            @yield('content')

        </main>
        @include('components.footer')



        <script src="vendors/popper/popper.min.js"></script>
       
        <script src="vendors/anchorjs/anchor.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="vendors/fontawesome/all.min.js"></script>
        <script src="vendors/lodash/lodash.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
        <script src="vendors/imagesloaded/imagesloaded.pkgd.js"></script>
        <script src="vendors/gsap/customEase.js"></script>
        <script src="vendors/gsap/scrollToPlugin.js"></script>
        <!--script(src=`${CWD}vendors/gsap/drawSVGPlugin.js`)-->
        <script src="assets/js/theme.js"></script>
        
        
    </body>
</html>
