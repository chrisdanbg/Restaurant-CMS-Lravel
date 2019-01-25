@extends('admin.index')

@section('adminContent')
    <div class="col-md-8 admin-panel">
        <div class="row mb-2">
               <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left fa-2x col-md-2 mt-2" style="color:black;"aria-hidden="true"></i></a>
        </div>


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