@extends('admin.index')

@section('adminContent')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="col-md-8 admin-panel">
        {{-- NAV BUTTONS --}}
        <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left fa-2x col-md-2 mt-2 pull-left" style="color:black;"aria-hidden="true"></i></a>
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
                      <td style="width:10%;">
                        <img class="" id="badge" name="badge" src="../storage{{ $product->photoUrl }}" href="../storage{{ $product->photoUrl }}" alt="" width="45%">
                      </td>
                      <td class="vertical-align: middle;">{{ $product->title }}</td>
                      <td class="vertical-align: middle;">{{ $product->category }}</td>
                      <td class="vertical-align: middle;">{{ $product->price }}</td>
                      <td align="center">
                      <a href="{{ route('adminEditProduct', ['id'=>$product->id])}}" class="btn-primary btn-lg ml-0 text-center" role="button" aria-pressed="true"><i class="fa fa-pencil"></i></a>
                        <a href ="#" data-id="{{$product->id}}" data-url="product/delete/" class="deleteProduct btn-primary btn-lg mr-1 text-center" role="button" aria-pressed="true"><i class="fa fa-minus-circle"></i></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>

{{-- SWEET ALERT CONFIRM Product Delete --}}
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>

<script>
    $(".deleteProduct").click(function(e) {
      e.preventDefault();
      var id = $(this).attr('data-id');
      var deleteFunction = $(this).attr('data-url');
        swal({
            title: 'Сигурни ли сте?',
            text: "След изтриването си, продуктът няма да може да може да се възстанови!",
            icon: 'warning',
            buttons: ["Не съм готов!", true],
            }).then((isConfirm) => {
                 if (isConfirm){
                        location.reload();
                        goToRoute(deleteFunction,id);
                    }
            });
    });

    function sleep(delay) {
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
    }
    function goToRoute(deleteFunction,id) {
        window.location.href='/admin/'+ deleteFunction + id;      
    }
</script>
@endsection