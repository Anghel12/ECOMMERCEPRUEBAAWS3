<!-- section -->
<section class="my-lg-14 my-14">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <!-- heading -->
                <h3>Related Items</h3>
            </div>
        </div>
        <!-- row -->

        @foreach ($similares as $similar)
            
       
        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
            <!-- col -->
            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <!-- badge -->

                        <div class="text-center position-relative">
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">Sale</span>
                            </div>
                            <a href="{{ route('home.e_commerce.products.show', $similar ) }}">
                                <!-- img -->
                                <img src="../assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                            </a>
                            <!-- action btn -->
                            <div class="card-product-action">
                                <a href="shop-single-2.html#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                </a>
                                <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="shop-single-2.html#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                            <a href="{{ route('home.e_commerce.products.show',$similar->id ) }}" class="text-decoration-none text-muted"><small>{{$similar->category->name}}</small></a>
                        </div>
                        <h2 class="fs-6"><a href="{{ route('home.e_commerce.products.show',$similar->id ) }}" class="text-inherit text-decoration-none">{{$similar->name}}</a></h2>
                        <div>
                            <!-- rating -->
                            <small class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small>
                            <span class="text-muted small">4.5(149)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-dark">{{$similar->price}}</span>
                                <span class="text-decoration-line-through text-muted">${{$similar->previous_price}}</span>
                            </div>
                            <!-- btn -->
                            <div>
                                <a href="shop-single-2.html#!" class="btn btn-primary btn-sm">
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
            @endforeach

   


            
        </div>
    </div>
</section>