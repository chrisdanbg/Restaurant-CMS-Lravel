@extends('admin.index')

@section('adminContent')
    <div class="col-md-8 admin-panel">

        {{-- HOME SLIDER BEGIN --}}
        <h1 class="text-center">Банер</h1>
        <form class="card p-5" action="{{ route('homepage.updateSlider')}}" method="POST">
            {{ csrf_field() }}
            <h5>Заглавие</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" value="{{$title}}">
            </div>

            <h5>Подзаглавие</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$subtitle}}">
            </div>

             <button type="submit" class="btn btn-primary">Запази</button>
        </form>
        
        {{-- END OF HOME SLIDER --}}

        <hr class="">

        {{-- FAST ORDER BEGIN--}}
        <h1 class="text-center">Бърза поръчка</h1>

        {{-- Product One --}}
        <form class="card p-5" action="{{ route('homepage.productOneUpdate')}}" method="POST">
                <h2 class="mb-5">Продукт едно</h2>
                {{ csrf_field() }}
                <h5>Заглавие</h5>
                <div class="form-group">
                    <input type="text" class="form-control" id="itemOneName" name='itemOneName' value="{{$itemOneName}}">
                </div>
    
                <h5>Съдържание</h5>
                <div class="form-group">
                    <textarea type="textarea" class="form-control" id="itemOneDescription" name='itemOneDescription' placeholder="">{{$itemOneDescription}}</textarea>
                </div>

                <h5>Цена</h5>
                <div class="form-group row">
                    <div class="col-md-2">
                        <input type="number" class="form-control" id="itemOnePrice" name='itemOnePrice' value="{{$itemOnePrice}}" step=".01">
                    </div>
                </div>
    
                 <button type="submit" class="btn btn-primary">Запази</button>
        </form>
        <br>
        <br>
        {{-- Product Two --}}
        
        <form class="card p-5" action="{{ route('homepage.productTwoUpdate')}}" method="POST">
                <h2 class="mb-5">Продукт две</h2>
                {{ csrf_field() }}
                <h5>Заглавие</h5>
                <div class="form-group">
                    <input type="text" class="form-control" id="itemТwoName" name='itemТwoName' value="{{$itemTwoName}}">
                </div>
    
                <h5>Съдържание</h5>
                <div class="form-group">
                    <textarea type="textarea" class="form-control" id="itemTwoDescription" name='itemTwoDescription' >{{$itemTwoDescription}}</textarea>
                </div>

                <h5>Цена</h5>
                <div class="form-group row">
                    <div class="col-md-2">
                        <input type="number" class="form-control" id="itemТwoPrice" name='itemТwoPrice' value="{{$itemTwoPrice}}" step=".01">
                    </div>
                </div>
    
                 <button type="submit" class="btn btn-primary">Запази</button>
        </form>
        <br>
        <br>

        {{-- Product Three --}}
        
        <form class="card p-5" action="{{ route('homepage.productThreeUpdate')}}" method="POST">
            <h2 class="mb-5">Продукт три</h2>
            {{ csrf_field() }}
            <h5>Заглавие</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="itemThreeName" name='itemThreeName' value="{{$itemThreeName}}">
            </div>

            <h5>Съдържание</h5>
            <div class="form-group">
                <textarea type="textarea" class="form-control" id="itemThreeDescription" name='itemThreeDescription' >{{$itemThreeDescription}}</textarea>
            </div>

            <h5>Цена</h5>
            <div class="form-group row">
                <div class="col-md-2">
                    <input type="number" class="form-control" id="itemThreePrice" name='itemThreePrice' value="{{$itemThreePrice}}" step=".01">
                </div>
            </div>

             <button type="submit" class="btn btn-primary">Запази</button>
    </form>
    <br>
    <br>

        {{-- END OF FAST ORDER --}}

        <hr>

        {{-- ABOUT SECTION --}}
        <h1 class="text-center">За Нас</h1>
        <form class="card p-5">
                
                <div class="form-group">
                    <textarea type="textarea" class="form-control" id="about" placeholder="Sample texthere"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Запази</button>
        </form>
        <br>
        <br>
        {{-- END OF ABOUT SECTIOn --}}

        <hr>

        {{-- FIND US SECTION --}}
        <h1 class="text-center mb-5">Намерете ни</h1>
        <form class="card p-5">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <h6>Адрес</h6>
                        <input type="text" class="form-control" id="address" placeholder="25.00">
                    </div>

                    <div class="form-group col-md-6">
                        <h6>Телефон</h6>
                        <input type="text" class="form-control" id="phone" placeholder="25.00">
                    </div>
                </div>

                <div class="form-row">
                        <div class="form-group col-md-6">
                            <h6>Тел. за резервации</h6>
                            <input type="text" class="form-control" id="resPhone" placeholder="25.00">
                        </div>
    
                        <div class="form-group col-md-6">
                            <h6>Email</h6>
                            <input type="email" class="form-control" id="email" placeholder="25.00">
                        </div>
                </div>

                <button type="submit" class="btn btn-primary">Запази</button>

                 
        </form>
        {{-- END OF FIND US SECTION --}}
    </div>
@endsection

