<!-- Modal -->
@foreach ($products as $product)
<div class="modal fade" id="quickViewModa{{ $product->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-8">
        <div class="position-absolute top-0 end-0 me-3 mt-3">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <!-- img slide -->
            <div class="product productModal" id="productModal">
              @foreach ($product->images as $img)
              <div class="zoom" onmousemove="zoom(event)" style="
                    background-image: url({{ Storage::url($img->url) }});">

                <!-- img -->
                <img src="{{ Storage::url($img->url) }}" alt="{{$product->name}}">
              </div>
              @endforeach
            </div>
            <!-- product tools -->
            <div class="product-tools">
              <div class="thumbnails row g-3" id="productModalThumbnails">
                @foreach ($product->images as $img)

                <div class="col-3" class="tns-nav-active">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img src="{{ Storage::url($img->url) }}" alt="{{$product->name}}">

                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-8 mt-6 mt-lg-0">
              <a href="index.html#!" class="mb-4 d-block">{{$product->category->name}}</a>
              <h2 class="mb-1 h1">{{ $product->name }}</h2>
              <div class="mb-4">
                <small class="text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i></small><a href="index.html#" class="ms-2">(30 reviews)</a>
              </div>
              <div class="fs-4">
                <span class="fw-bold text-dark">${{ $product->price }}</span>
                <span class="text-decoration-line-through text-muted">${{ $product->previous_price }}</span><span><small
                    class="fs-6 ms-2 text-danger">26% Off</small></span>
              </div>
              <hr class="my-6">
              <div class="mb-4">
                <button type="button" class="btn btn-outline-secondary">
                  250g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  500g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  1kg
                </button>
              </div>
              <div>
                <!-- input -->
                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity"
                    class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>
              </div>
              <div class="mt-3 row justify-content-start g-2 align-items-center">

                <div class="col-lg-4 col-md-5 col-6 d-grid">
                  <!-- button -->
                  <!-- btn -->

                  {{-- carrito --}}

                  {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}

                  {!! Form::hidden('product_id', $product->id) !!}

                  {!! Form::hidden('product_price', $product->price) !!}
                  <button type="subtmi" class="btn btn-primary">
                    <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                    cart
                  </button>




                  {!! Form::close() !!}

                </div>
                <div class="col-md-4 col-5">
                  <!-- btn -->
                  <a class="btn btn-light" href="index.html#" data-bs-toggle="tooltip" data-bs-html="true"
                    aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>

                  <form class="btn p-0 m-0" action="{{ route('admin.user.wishlist.store') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn  btn-light" data-bs-toggle="tooltip" data-bs-html="true"
                      aria-label="Wishlist">
                      <i class="feather-icon icon-heart"></i>
                    </button>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">



                  </form>
                </div>
              </div>



              <div class="mt-3 row justify-content-start g-2 align-items-center">
                <div class="col-xxl-6 col-lg-6 col-md-6 col-6 d-grid">
                    <!-- button -->
                    <!-- btn -->

                    {!! Form::open(['route' => 'comprarProducto', 'autocomplete' => 'off', 'method' => 'POST']) !!}

                    {!! Form::hidden('product_id', $product->id) !!}

                    {!! Form::hidden('product_price', $product->price) !!}
                    <button type="submit" class="btn btn-primary">
                        <i class="feather-icon icon-shopping-bag me-2"></i>
                        Comprar ahora
                    </button>
              
                    {!! Form::close() !!}
               
                </div>

            </div>


              <hr class="my-6">
              <div>
                <table class="table table-borderless">
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
                        <small>01 day shipping.<span class="text-muted">( Free pickup today)</span></small>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>
</div>
@endforeach