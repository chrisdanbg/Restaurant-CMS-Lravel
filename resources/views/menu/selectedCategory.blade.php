<div class="row col-12 p-0 section" id="category-Section"> 
            @foreach ($products as $product)
                <div class="card text-right mb-3" style="width: 30rem; height: 350px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img class="rounded align-middle mb-4" id="product-image" src="../storage{{ $product->photoUrl }}" alt="" width="50%">
                            </div>
                            <div class="col-6 ml-auto my-auto ">
                                <h5 class="text-right">{{$product->title}}</h5>
                                <h4 class="mt-0">{{$product->price}}лв.</h4>
                                <a href="#" class="btn btn-primary mb-2">Добави</a>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ml-3">
                                    <p class="card-text desc ml-auto">Съдържа: {{$product->description}}</p>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
</div>