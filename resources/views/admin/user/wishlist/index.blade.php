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
                      <li class="breadcrumb-item"><a href="shop-wishlist.html#!">Home</a></li>
                      <li class="breadcrumb-item"><a href="shop-wishlist.html#!">Shop</a></li>
                      <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
                   </ol>
                </nav>
             </div>
          </div>
       </div>
    </div>
    <!-- section -->
    <section class="mt-8 mb-14">
       <div class="container">
          <!-- row -->
          <div class="row">
             <div class="col-lg-12">
                <div class="mb-8">
                   <!-- heading -->
                   <h1 class="mb-1">My Wishlist</h1>
                   <p>There are 5 products in this wishlist.</p>
                </div>
                <div>  
                    @include('admin.user.wishlist.partials.table')
            
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
 </main>
</x-guest-layout>