@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center mt-5">Вашата поръчка</h1>

    @if (Session::has('cart'))
        <div>
            <ul class="list-group mb-4">
                @foreach ($products as $product)
                    <li class="list-group-item px-5 py-4 my-1">
                    <div class="row">
                        <div class="col">{{$product['item']->title}}</div>
                        <div class="col text-right">
                            <a href="{{route('cart.deleteItem', ['id' => $product['item']->id])}}" title=""><i style="color: #000000"; class="fa fa-minus align-middle mr-4"></i></a>
                            <span class="badge badge-secondary align-middle">{{$product['qty']}}</span>
                            <a href="{{route ('cart.addToCart', ['id' => $product['item']->id])}}" title=""><i style="color: #000000"; class='fa fa-plus align-middle ml-4' style=''></i></a>
                        </div>
                        <div class="col"><p class="text-right">{{$product['price']}}лв.</p></div>
                    </div>
                    </li>
                @endforeach
              </ul>
        </div>
        <button type="button" class="btn btn-danger btn-block">Напред</button>
    @else
        <h4 class="my-5 text-center">Все още не сте добавили нищо в количката</h4>
        <a href="{{route('menu')}}" class="btn btn-danger btn-block">Назад</a>
    @endif
</div>
@endsection