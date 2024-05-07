<section class="mt-8">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xl-6">
                <div class="slider slider-for">
                    <div>
                        <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-1.jpg)">
                            <!-- img -->
                            <!-- img -->
                            <img src="../assets/images/products/product-single-img-1.jpg{{-- {{Storage::url($product->images->url)}} --}}" alt="" />
                        </div>
                    </div>
                    <div>
                        <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-2.jpg)">
                            <!-- img -->
                            <!-- img -->
                            <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                        </div>
                    </div>
                    <div>
                        <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-3.jpg)">
                            <!-- img -->
                            <!-- img -->
                            <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                        </div>
                    </div>
                    <div>
                        <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-1.jpg)">
                            <!-- img -->
                            <!-- img -->
                            <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                        </div>
                    </div>
                    <div>
                        <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-4.jpg)">
                            <!-- img -->
                            <!-- img -->
                            <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="slider slider-nav mt-4">
                    <div>
                        <img src="../assets/images/products/product-single-img-1.jpg" alt="" class="w-100 rounded" />
                    </div>
                    <div>
                        <img src="../assets/images/products/product-single-img-2.jpg" alt="" class="w-100 rounded" />
                    </div>
                    <div>
                        <img src="../assets/images/products/product-single-img-3.jpg" alt="" class="w-100 rounded" />
                    </div>
                    <div>
                        <img src="../assets/images/products/product-single-img-1.jpg" alt="" class="w-100 rounded" />
                    </div>
                    <div>
                        <img src="../assets/images/products/product-single-img-4.jpg" alt="" class="w-100 rounded" />
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-xl-6">
                <div class="ps-lg-10 mt-6 mt-md-0">
                    <!-- content -->
                    <a href="shop-single-2.html#!" class="mb-4 d-block">{{$product->category->name}}</a>
                    <!-- heading -->
                    <h1 class="mb-1">{{$product->name}}</h1>
                    <div class="mb-4">
                        <!-- rating -->
                        <!-- rating -->
                        <small class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </small>
                        <a href="shop-single-2.html#" class="ms-2">(30 reviews)</a>
                    </div>
                    <div class="fs-4">
                        <!-- price -->
                        <span class="fw-bold text-dark">{{$product->price}}$32</span>
                        <span class="text-decoration-line-through text-muted">{{$product->previous_price}}$35</span>
                        <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                    </div>
                    <!-- hr -->
                    <hr class="my-6" />
                    <div class="mb-5">
                        <button type="button" class="btn btn-outline-secondary">250g</button>
                        <!-- btn -->
                        <button type="button" class="btn btn-outline-secondary">500g</button>
                        <!-- btn -->
                        <button type="button" class="btn btn-outline-secondary">1kg</button>
                    </div>
                    <div>
                        <!-- input -->
                        <div class="input-group input-spinner">
                            <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                            <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                        </div>
                    </div>
                    <div class="mt-3 row justify-content-start g-2 align-items-center">
                        <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                            <!-- button -->
                            <!-- btn -->

                            {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
    
                            {!! Form::hidden('product_id', $product->id) !!}
        
                            {!! Form::hidden('product_price', $product->price) !!}
                            <button type="submit" class="btn btn-primary">
                                <i class="feather-icon icon-shopping-bag me-2"></i>
                                Add to cart
                            </button>
                      
                            {!! Form::close() !!}
                       
                        </div>
                        <div class="col-md-4 col-4">
                            <!-- btn -->
                            <a class="btn btn-light" href="shop-single-2.html#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                            <a class="btn btn-light" href="shop-wishlist.html" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                        </div>
                    </div>
                    <div class="mt-3 row justify-content-start g-2 align-items-center">
                        <div class="col-xxl-6 col-lg-6 col-md-6 col-6 d-grid">
                            <!-- button -->
                            <!-- btn -->

                            {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
    
                            {!! Form::hidden('product_id', $product->id) !!}
        
                            {!! Form::hidden('product_price', $product->price) !!}
                            <button type="submit" class="btn btn-primary">
                                <i class="feather-icon icon-shopping-bag me-2"></i>
                                Comprar ahora
                            </button>
                      
                            {!! Form::close() !!}
                       
                        </div>
    
                    </div>

                    <!-- hr -->
                    <hr class="my-6" />
                    <div>
                        <!-- table -->
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>Product Code:</td>
                                    <td>FBB00255</td>
                                </tr>
                                <tr>
                                    <td>Availability:</td>
                                    <td>
                                        @if ($product->status == 'active')
                                        <span class="badge bg-light-primary text-dark-primary">Active</span>
                                    @elseif ($product->status == 'inactive')
                                        <span class="badge bg-light-danger text-dark-danger">Inactive</span>
                                    @elseif ($product->status == 'out_of_stock')
                                        <span class="badge bg-light-warning text-dark-warning">Out of Stock</span>
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Fruits</td>
                                </tr>
                                <tr>
                                    <td>Shipping:</td>
                                    <td>
                                        <small>
                                            01 day shipping.
                                            <span class="text-muted">( Free pickup today)</span>
                                        </small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-8">
                        <!-- dropdown -->
                        <div class="dropdown">
                            <a class="btn btn-outline-secondary dropdown-toggle" href="shop-single-2.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Share</a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="shop-single-2.html#">
                                        <i class="bi bi-facebook me-2"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="shop-single-2.html#">
                                        <i class="bi bi-twitter me-2"></i>
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="shop-single-2.html#">
                                        <i class="bi bi-instagram me-2"></i>
                                        Instagram
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>