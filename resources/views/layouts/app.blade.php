<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/new.css')}}">
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/btn-sec.css')}}">
    <link rel="stylesheet" href="{{asset('css/menuSpy.css')}}">

    {{-- Filepond CSS --}}
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

    <script src="{{asset('js/wow.min.js')}}"></script>

    <script src="{{asset('js/menuspy.js')}}"> var MenuSpy = require('menuspy');</script>

    {{-- SWIPER  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    {{-- /END SWIPER --}}

    {{-- MAPBOX --}}
    <script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.css' rel='stylesheet' />
    {{-- / MAPBOX --}}

    {{-- SweatAlert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- / SweatAlert --}}

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    
    <title>Bahd-recipes </title>
</head>

<body>
    @include('includes.header')
    @include('includes.subheader')
    @yield('content')
    @yield('scripts')

    <!--Begin page footer -->
      @include('includes.footer')
    <!-- End page footer -->
<script src="{{asset('js/app.js')}}"></script>

<script src="https://code.jquery.com/jquery-2.x-git.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="{{asset('js/vegas.min.js')}}"></script>
<script src="{{asset('js/EZView.js')}}"></script>
<script>
        
</script>

<script>new WOW().init();
        $("#jumbotron").vegas({
            timer: false,
            shuffle: true,
            transition: 'fade',
            animation: 'kenburns',
            slides: [
                { src: 'img/banner-1.jpg' },
                { src: 'img/banner-2.jpg' },
                { src: 'img/banner-3.jpg' }
            ]
        });
</script>

<script>
    
    L.mapbox.accessToken = 'pk.eyJ1IjoiY2hyaXNkYW5iZyIsImEiOiJjamgzajRoNzUwZmtyMnhtcnNvMzZra3pkIn0.idaBkNna1DmUwem9j5zAgw';
    var map = L.mapbox.map('map', 'mapbox.streets')
      .setView([42.016, 23.094], 16);

        L.marker([42.016, 23.094], {
        icon: L.mapbox.marker.icon({
            'marker-size': 'large',
            'marker-symbol': 'restaurant',
            'marker-color': '#fa0'
        })
    }).addTo(map);

    if (map.scrollWheelZoom) {
      map.scrollWheelZoom.disable();
}

</script>

<script>
  $(function(){
	  $('img').EZView();
  });

  
</script>
</body>

</html>
