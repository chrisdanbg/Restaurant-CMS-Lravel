@extends('admin.index')

@section('adminContent')
    <div class="col-md-8 admin-panel">
            
        <div class="row mb-2">
             <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left fa-2x col-md-2 mt-2" style="color:black;"aria-hidden="true"></i></a>
        </div>

       <h1 class="text-center">Редактирай продукт</h1>

        
       <form class="card p-5" action="{{ route('admin.EditProduct', ['id'=>$product->id])}}" method="POST">
            <img class="rounded mx-auto d-block mb-1" id="badge" name="badge" src="../../../storage{{ $product->photoUrl }}" alt="" width="35%">
            {{ csrf_field() }}
            <h5>Наименование</h5>
            <div class="form-group">
            <input type="text" class="form-control" id="title" name='title' value="{{$product->title}}">
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
                <textarea type="textarea" class="form-control" id="description" name='description' placeholder="">{{$product->description}}</textarea>
            </div>

           
            <div class="form-group row">
                <div class="col-md-5">
                        <h5>Изображение</h5>
                        <input type="file" class="filepond ml-auto"  value="{{ csrf_token() }}"/>
                </div>
                <div class="col-md-5  ml-auto">
                    <h5 class="text-center">Цена</h5>
                <input type="number" class="form-control col-xs-10 ml-auto" id="price" name='price' value="{{$product->price}}" step=".01">
                    <button type="submit"  class="btn btn-primary btn-block">Запази</button>
                </div>
                
            </div>
        </form>
    </div>

    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    
    
    {{-- FILEPOND SCRIPTS --}}
    <script>
           
            FilePond.registerPlugin(FilePondPluginImagePreview);
           // FilePond.parse(document.body);
            FilePond.setOptions({
                    allowImagePreview: false,
                    server: {
                        url: '/upload',
                        method: 'POST',
                        process: {
                            method: 'POST',
                            withCredentials: false,
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        }
                    }
            });
            const inputElement = document.querySelector('input[type="file"]');
            const pond = FilePond.create( inputElement );
           
            pond.onprocessfile = (error, file) => { 
                var imageUrl = 'http://localhost:8888/storage/';
                imageUrl += file.serverId.substring(6);
    
                document.getElementById("badge").src=imageUrl;
            };
    </script>
    @endsection