<div class="col-md-12 offset-xl-1 col-xl-4 col-lg-6">
    <div class="mt-4 mt-lg-0">
        <div class="card shadow-sm">
            <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
            <ul class="list-group list-group-flush">

                @foreach (Cart::content() as $item)
                <!-- list group item -->

                <li class="list-group-item px-4 py-3">
                    <div class="row align-items-center">{{--
                        {{Storage::url($item->options->urlfoto)}} --}}
                        <div class="col-2 col-md-2">
                            <img src="{{ asset('images/products/product-img-4.jpg') }}"
                                alt="Ecommerce" class="img-fluid" />
                        </div>
                        <div class="col-5 col-md-5">
                            <h6 class="mb-0">{{$item->name}}</h6>
                            <span><small class="text-muted">250g</small></span>
                        </div>
                        <div class="col-2 col-md-2 text-center text-muted">
                            <span>{{$item->qty}}</span>
                        </div>
                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                            <span class="fw-bold">${{$item->price}}</span>
                            <div class="text-decoration-line-through text-muted small">
                                ${{$item->qty * $item->price}}</div>
                        </div>
                    </div>
                </li>
                @endforeach

                <!-- list group item -->
                <li class="list-group-item px-4 py-3">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>Item Subtotal</div>
                        <div class="fw-bold">${{Cart::subtotal()}}</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            impuesto
                            <i class="feather-icon icon-info text-muted"
                                data-bs-toggle="tooltip" title="Default tooltip"></i>
                        </div>
                        <div class="fw-bold">${{Cart::tax()}}</div>
                    </div>
                </li>
                <!-- list group item -->
                <li class="list-group-item px-4 py-3">
                    <div class="d-flex align-items-center justify-content-between fw-bold">
                        <div>Subtotal</div>
                        <div>${{Cart::total()}}</div>
                    </div>
                </li>
                <li class="list-group-item px-4 py-3">
                    <div class="d-grid mb-1 mt-4">
                        <!-- btn -->
                        @auth
                        <a class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" href="{{ route('admin.user.cart.checkout') }}">
                            Place Order
                            <span class="fw-bold">${{Cart::total()}}</span>
                        </a>
                        @endauth
                    
                    </div>
                </li>
          
            </ul>
        </div>
    </div>
</div>