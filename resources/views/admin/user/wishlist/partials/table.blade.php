<!-- table -->
<div class="table-responsive">
   <table class="table text-nowrap table-with-checkbox">
      <thead class="table-light">
         <tr>
            <th>
               <!-- form check -->
               <div class="form-check">
                  <!-- input -->
                  <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                  <!-- label -->
                  <label class="form-check-label" for="checkAll"></label>
               </div>
            </th>
            <th></th>
            <th>Product</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Actions</th>
            <th>Remove</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($wishlists as $wishlist)
         <tr>
            <td class="align-middle">
               <!-- form check -->
               <div class="form-check">
                  <!-- input -->
                  <input class="form-check-input" type="checkbox" value="" id="chechboxTwo" />
                  <!-- label -->
                  <label class="form-check-label" for="chechboxTwo"></label>
               </div>
            </td>
            <td class="align-middle">
               @foreach($wishlist->product->images as $image)
               <a href="{{ Storage::url($image->url) }}"><img src="{{ Storage::url($image->url) }}" alt="" class="icon-shape icon-md" /></a>
               @endforeach
            </td>
            <td class="align-middle"> 
               <div>
                  <h5 class="fs-6 mb-0"><a href="shop-wishlist.html#" class="text-inherit">{{ $wishlist->product->name }}</a>
                  </h5>
                  <small>$.{{ $wishlist->product->price }} / {{ $wishlist->product->quantity }}b</small>
               </div>
            </td>
            <td class="align-middle">${{ $wishlist->product->price }}</td>
            <td class="align-middle">
               @if ($wishlist->product->status == 'active')
               <span class="badge bg-light-primary text-dark-primary">Active</span>
               @elseif ($wishlist->product->status == 'inactive')
               <span class="badge bg-light-danger text-dark-danger">Inactive</span>
               @elseif ($wishlist->product->status == 'out_of_stock')
               <span class="badge bg-light-warning text-dark-warning">Out of Stock</span>
               @endif
            </td>
            <td class="align-middle">
               {{-- carrito --}}
               <div class="">
                  {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}

                  {!! Form::hidden('product_id', $wishlist->id) !!}

                  {!! Form::hidden('product_price', $wishlist->price) !!}
                  <button type="subtmi" class="btn btn-primary btn-sm">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg>
                     Add to Cart
                  </button>

                  {!! Form::close() !!}


            </td>
            <td class="align-middle">

               <form action="{{route('admin.user.wishlist.destroy', $wishlist)}}" method="post">
                  @csrf
                  @method('Delete')
                  <button class="btn text-muted" type="submit">
                     <i class="feather-icon icon-trash-2"></i>
                   
                  </button>

               </form>
             


            </td>
         </tr>
         @endforeach
      </tbody>
   </table>