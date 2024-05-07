<section class="mb-lg-10 mt-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <h3 class="mb-0">Featured Categories</h3>
            </div>
        </div>
        <div class="category-slider">

            @foreach ($category as $categories)
                
        
            <div class="item">
                <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-8">
                              
                        @foreach($categories->images as $image)
                
                             <img style="height: 100px" src="{{ Storage::url($image->url) }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                          
                    @endforeach
                    
                            <div class="text-truncate">{{$categories->name}}</div>
                        </div>
                    </div>
                </a>
            </div>

            @endforeach
            <div class="item">
                <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-8">
                            <img src="images/category/category-snack-munchies.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                            <div class="text-truncate">Snack & Munchies</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-8">
                            <img src="images/category/category-bakery-biscuits.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                            <div class="text-truncate">Bakery & Biscuits</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-8">
                            <img src="images/category/category-instant-food.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                            <div class="text-truncate">Instant Food</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-8">
                            <img src="images/category/category-tea-coffee-drinks.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                            <div class="text-truncate">Tea, Coffee & Drinks</div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
                    <div class="card card-product mb-lg-4">
                        <div class="card-body text-center py-8">
                            <img src="images/category/category-baby-care.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                            <div class="text-truncate">Baby Care</div>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>
</section>