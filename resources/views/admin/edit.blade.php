@extends('admin.index')

@section('adminContent')
    <div class="col-md-8 admin-panel">
            
        <div class="row mb-2">
             <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left fa-2x col-md-2 mt-2" style="color:black;"aria-hidden="true"></i></a>
        </div>

       <h1 class="text-center">Редактирай продукт</h1>

        
       <form class="card p-5" action="{{ route('admin.EditProduct', ['id'=>$product->id])}}" method="POST">
            {{ csrf_field() }}
            <h5>Наименование</h5>
            <div class="form-group">
            <input type="text" class="form-control" id="title" name='title' value="{{$product->title}}">
            </div>

            <h5>Категория</h5>
            <div class="form-group">
                <select class="form-control" id="category" name="category" value="{{$product->category}}">
                      @foreach ($categories as $category)
                        <option>{{ $category->title }}</option>
                      @endforeach
                </select>
            </div>

            <h5>Съдържание</h5>
            <div class="form-group">
                <textarea type="textarea" class="form-control" id="description" name='description' placeholder="{{$product->description}}">{{$product->description}}</textarea>
            </div>

            <h5>Цена</h5>
            <div class="form-group row">
                <div class="col-md-2">
                    <input type="number" class="form-control" id="price" name='price' value="{{$product->price}}" step=".01">
                </div>
            </div>

             <button type="submit" class="btn btn-primary">Запази</button>
        </form>

    </div>
@endsection