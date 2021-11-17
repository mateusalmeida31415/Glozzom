<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} - @yield('pagina')</title>

    {{-- Estilo CSS --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    {{-- Bootstrap 4.6.1--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    
    {{-- Ligthbox CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/d6b75e91c7.js" crossorigin="anonymous"></script>

    {{-- Slick --}}
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">

    {{-- Slick default Style --}}
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    
</head>
<body>
    <div id="app">
        @include('components.navbar')
        @yield('content')
        @include('components.footer')
    </div>
    
    {{-- VUE.JS --}}
    <script src="{{asset('js/app.js')}}"></script>
    {{-- POPPER.JS --}}
    <script src="{{asset('js/popper.js')}}"></script>
    {{-- JQUERY --}}
    <script src="{{asset('js/jquery.js')}}"></script>
    {{-- Slick --}}
    <script src="{{asset('js/slick.min.js')}}"></script>
    {{-- Ligthbox JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <script>
        // Ligthbox jquery
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                
            });
        });

        // Slick
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
        });
    </script>
</body>
</html>