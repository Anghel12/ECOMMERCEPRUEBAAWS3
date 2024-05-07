<!-- Shop Cart -->
<x-guest-layout>


 

    <main>
        <!-- section-->
        <div class="mt-4">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="shop-checkout.html#!">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop-checkout.html#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- section -->
        <section class="mb-lg-14 mb-8 mt-8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div>
                            <div class="mb-8">
                                <!-- text -->
                                <h1 class="fw-bold mb-0">Checkout</h1>
                                @auth
                                @else
                                <p class="mb-0">
                                    Already have an account? Click here to
                                    <a href="shop-checkout.html#!">Sign in</a>
                                    .
                                </p>
                                @endauth

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <!-- accordion -->
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <!-- accordion item address -->

                                @include('admin.user.cart.partials.address')
                                
                    {{--             @include('admin.user.cart.partials.delivery_time')
                                
                                @include('admin.user.cart.partials.delivery_instructions')
                            
 --}}
                                @include('admin.user.cart.partials.payment_method')

                            </div>
                        </div>
                        @include('admin.user.cart.partials.order_details')
                             
     
                    </div>
                </div>
            </div>
        </section>
    </main>

 
</x-guest-layout>