@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 mt-5">
        <h1 class="text-center">Menu</h1>
     </div>
     

     <div class="item-slider">

            <div class="card text-right" style="width: 100%; height: 350px;">

              <div class="card-body mr-4">
              <img class="rounded float-left" id="product-image" src="{{asset('img/burger.png')}}" alt="" width="35%">
                <h5 class=" text-right">Име</h5>
                <h4 class="mt-0">Цена лв</h4>
                <a href="#" class="btn btn-primary mb-2">Добави</a>
              <p class="card-text desc mb-4">ОПиса</p>
              </div>
            </div>

      </div>
    
    
</div>

@endsection
