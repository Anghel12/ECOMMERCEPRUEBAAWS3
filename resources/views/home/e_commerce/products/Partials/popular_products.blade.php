<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <h3 class="mb-0">Popular Products</h3>
            </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
            @foreach ($products as $product)

            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center position-relative">
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">Sale</span>
                            </div>
                            @foreach ($product->images as $img)
                            <a href="{{ route('home.e_commerce.products.show',$product ) }}">                            
                                <img style="height: 200px" src="{{ Storage::url($img->url) }}" alt="{{$product->name}}" class="mb-3 img-fluid" />
                            </a>
                        @endforeach
                    

                            <div class="card-product-action">
                                <a href="index.html#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModa{{ $product->id }}">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                </a>
                                <form class="btn p-0 m-0" action="{{ route('admin.user.wishlist.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                             
                                    <button  type="submit" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></button>
                                
                                </form>
                               <a href="index.html#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <div class="text-small mb-1">
                            <a href="{{ route('home.e_commerce.products.show',$product ) }}" class="text-decoration-none text-muted"><small>{{$product->category->name}}</small></a>
                        </div>
                        <h2 class="fs-6"><a href="{{ route('home.e_commerce.products.show',$product ) }}" class="text-inherit text-decoration-none">{{$product->name}}</a></h2>
                        <div>
                            <small class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small>
                            <span class="text-muted small">{{-- {{$product->reviews->rating}} --}}4.5(149)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-dark">${{$product->price}}</span>
                                <span class="text-decoration-line-through text-muted">${{$product->previous_price}}</span>
                            </div>
                            <div>

                                  {{-- carrito --}}
                    <div class="">
                        {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
    
                        {!! Form::hidden('product_id', $product->id) !!}
    
                        {!! Form::hidden('product_price', $product->price) !!}
                        <button type="subtmi" class="btn btn-primary btn-sm">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-plus"
                        >
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                            Add
                        </button>
                  
    
      
    
                        {!! Form::close() !!}
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach

            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center position-relative">
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-success">14%</span>
                            </div>
                            <a href="pages/shop-single.html">
                                <img src="images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            <div class="card-product-action">
                                <a href="index.html#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                </a>
                                <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="index.html#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <div class="text-small mb-1">
                            <a href="index.html#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">NutriChoice Digestive</a></h2>
                        <div class="text-warning">
                            <small>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small>
                            <span class="text-muted small">4.5 (25)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">$24</span></div>
                            <div>
                                <a href="index.html#!" class="btn btn-primary btn-sm">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-plus"
                                    >
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center position-relative">
                            <a href="pages/shop-single.html"><img src="images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            <div class="card-product-action">
                                <a href="index.html#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                </a>

                                <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                
                                <a href="index.html#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <div class="text-small mb-1">
                            <a href="index.html#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Cadbury 5 Star Chocolate</a></h2>
                        <div class="text-warning">
                            <small>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </small>
                            <span class="text-muted small">5 (469)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-dark">$32</span>
                                <span class="text-decoration-line-through text-muted">$35</span>
                            </div>
                            <div>
                                <a href="index.html#!" class="btn btn-primary btn-sm">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-plus"
                                    >
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center position-relative">
                            <a href="pages/shop-single.html"><img src="images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                            <div class="card-product-action">
                                <a href="index.html#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                </a>
                                <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="index.html#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">Hot</span>
                            </div>
                        </div>
                        <div class="text-small mb-1">
                            <a href="index.html#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                        <div class="text-warning">
                            <small>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                            </small>
                            <span class="text-muted small">3.5 (456)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-dark">$3</span>
                                <span class="text-decoration-line-through text-muted">$5</span>
                            </div>
                            <div>
                                <a href="index.html#!" class="btn btn-primary btn-sm">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-plus"
                                    >
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


 



        </div>
    </div>
</section>