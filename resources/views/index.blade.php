@extends('layouts.app')


@section('content')
<div class="jumbotron wow bounceInUp text-white " id="jumbotron">
  <div class="center-content ">
    <h1 class="display-1 wow bounceInUp text-center mb-5 jumbo-header">{{$title}}</h1>
  <h2 class="lead text-center">{{$subtitle}}</h2>
    <hr class="" style="background-color: white;">
    <p class="text-center ">Благоевград Ул. Зима 25</p>
    <p class="text-center sm-screen">
      <a class="btn btn-primary btn-lg " href="#" role="button">Поръчка</a>
      <a class="btn btn-primary btn-lg " href="#" role="button">Меню</a>
    </p>
  </div>
</div>


{{-- Full Screen Swiper --}}
<h1 class="text-center mt-5 mb-2 headline">БЪРЗА ПОРЪЧКА</h1>
<div class="fullScreen-swiper full-menu">

      <div class="item-slider">

            <div class="card text-right" style="width: 100%; height: 350px;">

              <div class="card-body mr-4">
              <img class="rounded float-left" id="product-image" src="{{asset('img/burger.png')}}" alt="" width="35%">
                <h5 class=" text-right">{{$itemOneName}}</h5>
                <h4 class="mt-0">{{$itemOnePrice}}лв</h4>
                <a href="#" class="btn btn-primary mb-2">Добави</a>
              <p class="card-text desc mb-4">{{$itemOneDescription}}</p>
              </div>
            </div>

      </div>
      <div class="item-slider">

            <div class="card text-right" style="width: 100%; height: 350px;">
              <div class="card-body mr-4">
              <img class="rounded float-left" id="product-image" src="{{asset('img/burger.png')}}" alt="" width="35%">
                <h5 class=" text-right">{{$itemTwoName}}</h5>
                <h4 class="mt-0">{{$itemTwoPrice}}лв</h4>
                <a href="#" class="btn btn-primary mb-2">Добави</a>
              <p class="card-text desc mb-4">{{$itemTwoDescription}}</p>
              </div>
            </div>

      </div>
      <div class="item-slider">

            <div class="card text-right" style="width: 100%; height: 350px;">

              <div class="card-body mr-4">
              <img class="rounded float-left" id="product-image" src="{{asset('img/burger.png')}}" alt="" width="35%">
                <h5 class=" text-right">{{$itemThreeName}}</h5>
              <h4 class="mt-0">{{$itemThreePrice}}лв</h4>
                <a href="#" class="btn btn-primary mb-2">Добави</a>
              <p class="card-text desc mb-4">{{$itemThreeDescription}}</p>
              </div>
            </div>

      </div>

</div>
{{-- !Full Screen Swiper --}}

{{-- Mobile Swiper --}}
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="card text-right" style="width: 100%; height: 350px;">

          <div class="card-body">
          <img class="rounded float-left" id="product-image" src="{{asset('img/burger.png')}}" href="{{asset('img/burger.png')}}" alt="" width="35%">
            <h5 class="card-title text-right">Телешки бургер "Мексико"</h5>
            <h4 class="">7.99лв</h4>
            <a href="#" class="btn btn-primary">Добави</a>
            <p class="card-text desc description">Телешко месо, Питка със сусам, Домати, Айсберг, Пресен червен лук, Кисели краставички, Майонеза</p>

          </div>
        </div>
      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
{{-- !Mobile Swiper --}}

{{-- ABOUT  --}}
<h1 class="text-center mt-5 mb-2 headline wow bounceInUp ">ЗА НАС</h1>
<div class="about wow bounceInUp ">
    <div class="about-photos">
      <div class="">
        <img class="borderimg" src="{{asset('./img/about/1.jpg')}}" alt="" width="85%;">
        <img class="borderimg" src="{{asset('./img/about/2.jpg')}}" alt="" width="41%;">
        <img class="borderimg" src="{{asset('./img/about/3.jpg')}}" alt="" width="41%;">
      </div>
    </div>
    <div class="about-text middle">
        <div class="middle">
          <p>Вкусната храна и уютната обстановка са само началото на един добър бизнес обяд или просто похапване в добра компания. Музиката е приятно тиха и специално подбрана. С приятели, колеги или със семейството си - заповядайте при нас, за да прекарате приятно свободното си време и да опитате майсторството на нашата кухня.
          <br>
          <p></p>
          Ресторантът има 2 салона, 2 градини (лятна и зимна) и 2 VIP сепарета.
          <br>
          <p></p>
          Добре дошли!</p>
        </div>
    </div>
  </div>
{{-- !ABOUT  --}}

{{-- Contact Info--}}
<div class="contact-info wow bounceInUp mb-5">
  <div class="dotted-header ">
      <h2 class="dotted-header-text text-center">НАМЕРЕТЕ НИ</h2>
  </div>
    <div class="fullScreen-swiper info-container">
      {{-- First Info  --}}
      <div class="item-1 item-slider" id="a" style="border:none;">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="50px" height="50px" class="info-svg float-left" viewBox="0 0 513.597 513.597" style="enable-background:new 0 0 513.597 513.597;" xml:space="preserve">

              	<path class="info-svg" d="M263.278,0.107C158.977-3.408,73.323,80.095,73.323,183.602c0,117.469,112.73,202.72,175.915,325.322   c3.208,6.225,12.169,6.233,15.388,0.009c57.16-110.317,154.854-184.291,172.959-290.569   C456.331,108.387,374.776,3.866,263.278,0.107z M256.923,279.773c-53.113,0-96.171-43.059-96.171-96.171   s43.059-96.171,96.171-96.171c53.113,0,96.172,43.059,96.172,96.171S310.036,279.773,256.923,279.773z" fill="#d63031"/>
              </svg>
              <div class="info-container">
                <h6 class="info-header font-weight-bold" id="b">АДРЕС<h6>
                <p class="info-text font-weight-light">Благоевград 2700, ул. Зима 1<p>
              </div>
      </div>
      {{-- Second Info  --}}
      <div class="item-1 item-slider" id="a">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 578.106 578.106" class="info-svg float-left"  style="enable-background:new 0 0 578.106 578.106;" xml:space="preserve" width="50px" height="50px">

              	<path class="info-svg" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781    c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309    c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584    c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68    c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299    c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294    c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756    c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236    c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978    s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802    s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949    c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143    l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768    C571.098,441.238,576.197,447.968,577.83,456.128z" fill="#D80027"/>
              </svg>
              <div class="info-container">
                <h6 class="info-header font-weight-bold" id="b">ТЕЛЕФОН<h6>
                <p class="info-text font-weight-light">0889 889 817<p>
              </div>
      </div>
      {{-- Third Info  --}}
      <div class="item-1 item-slider" id="a">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 578.106 578.106" class="info-svg float-left"  style="enable-background:new 0 0 578.106 578.106;" xml:space="preserve" width="50px" height="50px">

                	<path class="info-svg" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781    c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309    c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584    c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68    c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299    c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294    c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756    c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236    c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978    s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802    s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949    c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143    l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768    C571.098,441.238,576.197,447.968,577.83,456.128z" fill="#D80027"/>
                </svg>
              <div class="info-container">
                <h6 class="info-header font-weight-bold" id="b">ТЕЛ. ЗА РЕЗЕРВАЦИИ<h6>
                <p class="info-text font-weight-light">02 035 525<p>
              </div>
      </div>
      {{-- Fourth Info  --}}
      <div class="item-1 item-slider " id="a">
              <svg class="info-svg float-left env" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 511.626 511.626" style="enable-background:new 0 0 511.626 511.626;" xml:space="preserve">

              	<path class="info-svg" d="M49.106,178.729c6.472,4.567,25.981,18.131,58.528,40.685c32.548,22.554,57.482,39.92,74.803,52.099    c1.903,1.335,5.946,4.237,12.131,8.71c6.186,4.476,11.326,8.093,15.416,10.852c4.093,2.758,9.041,5.852,14.849,9.277    c5.806,3.422,11.279,5.996,16.418,7.7c5.14,1.718,9.898,2.569,14.275,2.569h0.287h0.288c4.377,0,9.137-0.852,14.277-2.569    c5.137-1.704,10.615-4.281,16.416-7.7c5.804-3.429,10.752-6.52,14.845-9.277c4.093-2.759,9.229-6.376,15.417-10.852    c6.184-4.477,10.232-7.375,12.135-8.71c17.508-12.179,62.051-43.11,133.615-92.79c13.894-9.703,25.502-21.411,34.827-35.116    c9.332-13.699,13.993-28.07,13.993-43.105c0-12.564-4.523-23.319-13.565-32.264c-9.041-8.947-19.749-13.418-32.117-13.418H45.679    c-14.655,0-25.933,4.948-33.832,14.844C3.949,79.562,0,91.934,0,106.779c0,11.991,5.236,24.985,15.703,38.974    C26.169,159.743,37.307,170.736,49.106,178.729z" fill="#D80027"/>
            		<path d="M483.072,209.275c-62.424,42.251-109.824,75.087-142.177,98.501c-10.849,7.991-19.65,14.229-26.409,18.699    c-6.759,4.473-15.748,9.041-26.98,13.702c-11.228,4.668-21.692,6.995-31.401,6.995h-0.291h-0.287    c-9.707,0-20.177-2.327-31.405-6.995c-11.228-4.661-20.223-9.229-26.98-13.702c-6.755-4.47-15.559-10.708-26.407-18.699    c-25.697-18.842-72.995-51.68-141.896-98.501C17.987,202.047,8.375,193.762,0,184.437v226.685c0,12.57,4.471,23.319,13.418,32.265    c8.945,8.949,19.701,13.422,32.264,13.422h420.266c12.56,0,23.315-4.473,32.261-13.422c8.949-8.949,13.418-19.694,13.418-32.265    V184.437C503.441,193.569,493.927,201.854,483.072,209.275z" fill="#D80027"/>
              </svg>
              <div class="info-container">
                <h6 class="info-header font-weight-bold" id="b">E-MAIL<h6>
                <p class="info-text font-weight-light">info@don-noir.bg<p>
              </div>
      </div>
    </div>
</div>

{{-- MapBox API--}}
<div id="map" class=""></div>

@endsection


@section('scripts')
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script>
    $(function() {
      $('#a').hover(function() {
        $('#b').css('color', '#d63031');
        $('.info-svg').css('background-color', '#d63031');
         $('.info-svg').css({ fill: "#ffffff" });
      }, function() {
        // on mouseout, reset the background colour
        $('#b').css('color', '');
        $('.info-svg').css('background-color', '');
        $('.info-svg').css({ fill: "#d63031" });
      });
    });
    </script>
    <script src="{{asset('js/vegas.min.js')}}"></script>
    <script>
      $("#jumbotron").vegas({
          timer: false,
          shuffle: true,
          slides: [
              { src: '{{asset('img/banner-1.jpg')}}' },
              { src: 'img/banner-2.jpg' },
              { src: 'img/banner-3.jpg' }
          ]
      });
    </script>

     <script>
          var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
      </script>

      {{-- // Google Maps Script --}}


@endsection
