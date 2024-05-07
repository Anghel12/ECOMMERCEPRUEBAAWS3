<x-app-layout>
   <!-- main -->
 <main class="main-content-wrapper">
    <!-- container -->
    <div class="container">
       <!-- row -->
       <div class="row mb-8">
          <div class="col-md-12">
             <div class="d-md-flex justify-content-between align-items-center">
                <!-- page header -->
                <div>
                   <h2>Add New Product</h2>
                   <!-- breacrumb -->
                   <nav aria-label="breadcrumb">
                      <ol class="breadcrumb mb-0">
                         <li class="breadcrumb-item"><a href="add-product.html#" class="text-inherit">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="add-product.html#" class="text-inherit">Products</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                      </ol>
                   </nav>
                </div>
                <!-- button -->
                <div>
                   <a href="{{ url('admin/products') }}" class="btn btn-light">Back to Product</a>
                </div>
             </div>
          </div>
       </div>

       {!! Form::open(['route' => 'admin.e_commerce.products.store', 'autocomplete' => 'off', 'files' => true]) !!}


       <!-- row -->
       <div class="row">
     
          <div class="col-lg-8 col-12">
             <!-- card -->
             <div class="card mb-6 card-lg">
                <!-- card body -->
                <div class="card-body p-6">
                   <h4 class="mb-4 h5">Product Information</h4>

                   <div class="row">
                      <!-- input -->
                      <div class="mb-3 col-lg-6">
                         <label class="form-label">Title</label>
                         <input type="text" id="name" name="name" class="form-control" placeholder="Product Name" />

                         @error('name')
                         <span class="text-danger"> {{$message}} </span>
                         @enderror
                      </div>

                      <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                      <!-- input -->
                      <div class="mb-3 col-lg-6">
                         <label class="form-label">Product Category</label>
                         <select id="category_id" name="category_id" class="form-select">
                         
                            @foreach ($category as $categories)
                            <option value="{{$categories->id}}">{{$categories->name}}</option>
                            @endforeach
                            
                         </select>

                           
                       @error('category_id')
                       <span class="text-danger"> {{$message}} </span>
                       @enderror
                      </div>
                      <!-- input -->
                      <div class="mb-3 col-lg-6">
                         <label class="form-label">Weight</label>
                         <input type="text" class="form-control" placeholder="Weight"/>
                      </div>
                      <!-- input -->
                      <div class="mb-3 col-lg-6">
                         <label class="form-label">Units</label>
                         <select id="quantity" name="quantity" class="form-select">
                           <option value="1" selected>1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                       </select>
                       
                       @error('quantity')
                       <span class="text-danger"> {{$message}} </span>
                       @enderror
                        
                      </div>
                      <div>
                         <div class="mb-3 col-lg-12 mt-5">
                            <!-- heading -->
                            <h4 class="mb-3 h5">Product Images</h4>

                            <!-- input -->
                            {!! Form::file('files[]', ['class' =>'minimal-img', 'accept' => 'image/*', 'multiple' => true]) !!}
                            <div id="my-dropzone"   class="dropzone mt-4 border-dashed rounded-2 min-h-0"></div>
                         </div>
                      </div>
                      <!-- input -->
                      <div class="mb-3 col-lg-12 mt-5">
                         <h4 class="mb-3 h5">Product Descriptions</h4>
                         <textarea class="py-8" name="description" id="description"></textarea>
                    {{--      <div class="py-8" name="" id="editor"></div> --}}

                    @error('description')
                       <span class="text-danger"> {{$message}} </span>
                       @enderror
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-12">
             <!-- card -->
             <div class="card mb-6 card-lg">
                <!-- card body -->
                <div class="card-body p-6">
                   <!-- input -->
                   <div class="form-check form-switch mb-4">
                      <input class="form-check-input" type="checkbox" role="switch" checked />
                      <label class="form-check-label" for="switch">In Stock</label>

                   </div>

                   <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="featured" id="featured_true" value="1" checked />
                     <label class="form-check-label" for="featured_true">True</label>
                 </div>
                 <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="featured" id="featured_false" value="0" />
                     <label class="form-check-label" for="featured_false">False</label>
                 </div>
                 

                   @error('featured')
                   <span class="text-danger"> {{$message}} </span>
                   @enderror
                   <!-- input -->
                   <div>
                      <div class="mb-3">
                         <label class="form-label">Product Code</label>
                         <input type="text" class="form-control" placeholder="Enter Product Title" />
                      </div>
                      <!-- input -->
                      <div class="mb-3">
                         <label class="form-label">Product SKU</label>
                         <input type="text" class="form-control" placeholder="Enter Product Title" />
                      </div>
                      <!-- input -->
                      <div class="mb-3">
                         <label class="form-label" id="productSKU">Status</label>
                         <br />
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="active" checked />
                            <label class="form-check-label" for="inlineRadio1">Active</label>
                         </div>
                         <!-- input -->
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="inactive" />
                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                         </div>
                         <!-- input -->
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="out_of_stock" />
                           <label class="form-check-label" for="inlineRadio3">out_of_stock</label>
                        </div>

                        
                      @error('status')
                      <span class="text-danger"> {{$message}} </span>
                      @enderror
                        <!-- input -->
                      </div>
                   </div>
                </div>
             </div>
             <!-- card -->
             <div class="card mb-6 card-lg">
                <!-- card body -->
                <div class="card-body p-6">
                   <h4 class="mb-4 h5">Product Price</h4>
                   <!-- input -->
                   <div class="mb-3">
                      <label class="form-label">Regular Price</label>
                      <input type="text" id="price" name="price" class="form-control" placeholder="$0.00" />

                      
                      @error('price')
                      <span class="text-danger"> {{$message}} </span>
                      @enderror
                   </div>
                   <!-- input -->
                   <div class="mb-3">
                      <label class="form-label">Sale Price</label>
                      <input type="text" id="previous_price" name="previous_price" class="form-control" placeholder="$0.00" />

                      
                      @error('previous_price')
                      <span class="text-danger"> {{$message}} </span>
                      @enderror
                   </div>
                </div>
             </div>
             <!-- card -->
             <div class="card mb-6 card-lg">
                <!-- card body -->
                <div class="card-body p-6">
                   <h4 class="mb-4 h5">Meta Data</h4>
                   <!-- input -->
                   <div class="mb-3">
                      <label class="form-label">Meta Title</label>
                      <input type="text" class="form-control" placeholder="Title" />
                   </div>

                   <!-- input -->
                   <div class="mb-3">
                      <label class="form-label">Meta Description</label>
                      <textarea class="form-control" rows="3" placeholder="Meta Description"></textarea>
                   </div>
                </div>
             </div>
             <!-- button -->
             <div class="d-grid">
                <button type="submit" class="btn btn-primary">Create Product</button>
             </div>

            
          </div>
        
       </div>
       {!! Form::close() !!}
    </div>
 </main>
</x-app-layout>
