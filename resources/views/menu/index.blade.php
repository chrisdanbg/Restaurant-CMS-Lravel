@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 mt-5">
        <h1 class="text-center">Menu</h1>
     </div>

     @foreach ($products as $product)
        <div class="item-slider">
            <div class="card text-right" style="width: 100%; height: 350px;">
              <div class="card-body mr-4">
              <div class="row">
                  <div class="col-md-5">
                      <img class="rounded float-left mb-2" id="product-image" src="../storage{{ $product->photoUrl }}" alt="" width="80%">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h5 class=" text-right">{{$product->title}}</h5>
                    <h4 class="mt-0">{{$product->price}}лв.</h4>
                    <a href="#" class="btn btn-primary mb-2">Добави</a>
                  </div>
                
              </div>
              
              
              <p class="card-text desc mb-4">Съдържа: {{$product->description}}</p>
              </div>
            </div>
        </div>        
     @endforeach
    
    
</div>

@endsection
