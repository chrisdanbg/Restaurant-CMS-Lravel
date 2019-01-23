@extends('admin.index')

@section('adminContent')
    <div class="col-md-8 admin-panel">
        {{-- NAV BUTTONS --}}
        <a href=" {{ route ('adminCreateCategory') }} " class="btn btn-primary btn-lg pull-right active" role="button" aria-pressed="true"><i class="fa fa fa-database mr-1"></i>New Category</a>
        <a href=" {{ route ('adminCreate') }} " class="btn btn-primary btn-lg pull-right active" role="button" aria-pressed="true"><i class="fa fa-plus-circle mr-1"></i>Create New Product</a>
        
        {{-- PRODUCT TABLE --}}
        <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <th scope="row">{{ $product->id }}</th>
                      <td>{{ $product->title }}</td>
                      <td>{{ $product->category }}</td>
                      <td>{{ $product->price }}</td>
                      <td align="center">
                          <a href="#" class="btn-primary btn-lg ml-0 text-center" role="button" aria-pressed="true"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn-primary btn-lg mr-1 text-center" role="button" aria-pressed="true"><i class="fa fa-minus-circle"></i></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
@endsection