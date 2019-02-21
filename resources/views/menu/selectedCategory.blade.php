<div class="row mx-auto" id="category-Section"> 
            @foreach ($products as $product)
                <div class="card text-right mb-3 mx-1" style="width: 30rem; height: 350px;">
                    <div class="card-body overflow-hidden">
                        <div class="row">
                            <div class="col-6">
                                    <div class="menu-desktop-card-image">
                                         <img class="" id="product-image" src="../storage{{ $product->photoUrl }}" alt="" width="100%">
                                    </div>
                            </div>

                            <div class="col-6 ml-auto my-auto ">
                                <h5 class="text-right">{{$product->title}}</h5>
                                <h4 class="mt-0">{{$product->price}}лв.</h4>
                            <a href="{{ route ('cart.addToCart', ['id' => $product->id])}}" class="btn btn-primary mb-2">Добави</a>
                            </div>

                        </div>

                            <div class="row mt-2">
                                <div class="col-12 ml-3">
                                    <p class="card-text desc ml-auto">Съдържа: {{$product->description}}</p>
                                </div>
                            </div>
                            
                    </div>
                </div>
            @endforeach
</div>