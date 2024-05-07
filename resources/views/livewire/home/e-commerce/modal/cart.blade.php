<!-- Shop Cart -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header border-bottom">
		<div class="text-start">
			<h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
			<small>Location in 382480</small>
		</div>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div>
			<!-- alert -->
			<div class="alert alert-danger p-2" role="alert">
				You’ve got FREE delivery. Start
				<a href="index.html#!" class="alert-link">checkout now!</a>
			</div>
			<ul class="list-group list-group-flush">

				@foreach (Cart::content() as $item)

				<!-- list group -->
				<li class="list-group-item py-3 ps-0 border-top">
					<!-- row -->
					<div class="row align-items-center">
						<div class="col-6 col-md-6 col-lg-7">
							<div class="d-flex">
								<img src="{{Storage::url($item->options->urlfoto)}}" alt="{{$item->name}}" class="icon-shape icon-xxl" />
								<div class="ms-3">
									<!-- title -->
									<a href="{{ route('home.e_commerce.products.show', $item->id ) }}" class="text-inherit">
										<h6 class="mb-0">{{$item->name}}</h6>
									</a>
									<span><small class="text-muted">.{{$item->price}} / {{$item->quantity}}</small></span>
									<!-- text -->
									<div class="mt-2 small lh-1">
										{!! Form::open(['route' => ['eliminarproducto', $item->rowId], 'method' => 'DELETE']) !!}
													
										<button class="text-decoration-none text-inherit" type="submit">
											<span class="me-1 align-text-bottom">
												<svg
													xmlns="http://www.w3.org/2000/svg"
													width="14"
													height="14"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
													class="feather feather-trash-2 text-success"
												>
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
									
												<span class="text-muted">
													Remove
												</span>
											</button> 
								
										{!! Form::close() !!}
									</div>
								</div>
							</div>
						</div>
						<!-- input group -->
						<div class="col-4 col-md-3 col-lg-3">
							<!-- input -->
							<!-- input -->
							<div class="input-group input-spinner">
								<input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
								<input type="number" step="1" max="10" value="{{$item->qty}}" name="quantity" class="quantity-field form-control-sm form-input" />
								<input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
							</div>
						</div>
						<!-- price -->
						<div class="col-2 text-lg-end text-start text-md-end col-md-2">
							<span class="fw-bold">${{$item->price}}</span>
							<div class="text-decoration-line-through text-muted small">${{$item->qty * $item->price}}</div>
						</div>

				
					</div>
				</li>

				@endforeach
{{-- 				<div class="me-auto">
					<div>Service Fee</div>
				</div>
				<span>{{Cart::subtotal()}}</span>
				<div class="me-auto">
					<div>Service Fee</div>
				</div>
				<span>{{Cart::tax()}}</span> --}}
				<div class="justify-content-between">
		
				<div class="me-auto">
					<div>total</div>
					<span>{{Cart::total()}}</span>
				</div>
				
							
			</div>
			
			<!-- btn -->
			<div class="d-flex justify-content-between mt-4">
			
				<button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas" aria-label="Close">Continue Shopping</button>
				<a href=" {{ url('/vercarrito')}} " class="btn btn-dark">view Cart</a>
			</div>
		</div>
	</div>
</div>