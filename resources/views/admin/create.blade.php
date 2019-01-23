@extends('admin.index')

@section('adminContent')
    <div class="col-md-8 admin-panel">
       <h1 class="text-center">Create New Product</h1>

        
       <form class="card p-5" action="{{ route('admin.createNew')}}" method="POST">
            <h2 class="mb-5">Продукт име</h2>
            {{ csrf_field() }}
            <h5>Наименование</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="title" name='title' value="">
            </div>

            <h5>Категория</h5>
            <div class="form-group">
                <select class="form-control" id="category" name="category">
                      @foreach ($categories as $category)
                        <option>{{ $category->title }}</option>
                      @endforeach
                </select>
            </div>

            <h5>Съдържание</h5>
            <div class="form-group">
                <textarea type="textarea" class="form-control" id="description" name='description' placeholder=""></textarea>
            </div>

            <h5>Цена</h5>
            <div class="form-group row">
                <div class="col-md-2">
                    <input type="number" class="form-control" id="price" name='price' value="" step=".01">
                </div>
            </div>

             <button type="submit" class="btn btn-primary">Запази</button>
        </form>

    </div>
@endsection