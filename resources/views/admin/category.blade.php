@extends('admin.index')

@section('adminContent')
    <div class="col-md-8 admin-panel">
       <h1 class="text-center">Create New Product</h1>


       <form class="card p-5" action="{{ route('admin.createNewCategory')}}" method="POST">
            <h2 class="mb-5">Създай категория</h2>
            {{ csrf_field() }}
            <h5>Име на категория</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="title" name='title' value="">
            </div>

             <button type="submit" class="btn btn-primary">Запази</button>
        </form>

    </div>
@endsection