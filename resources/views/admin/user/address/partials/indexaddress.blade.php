
<div class="col-lg-9 col-md-8 col-12">
    <div class="py-6 p-md-6 p-lg-10">
        <div class="d-flex justify-content-between mb-6">
            <!-- heading -->
            <h2 class="mb-0">Address</h2>
            <!-- button -->
            <a href="account-address.html#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add a new address</a>
        </div>
        <div class="row">
			@if($addresses->isEmpty())
			<p>No hay direcciones disponibles.</p>
		@else
			@foreach ($addresses as $address)
				 <!-- col -->
				 <div class="col-xl-5 col-lg-6 col-xxl-4 col-12 mb-4">
					<!-- form -->
					<div class="card">
						<div class="card-body p-6">
							<div class="form-check mb-4">
								<input class="form-check-input" type="radio" name="checkbox" id="checkbox" {{$address->checkbox}} />
								<label class="form-check-label text-dark fw-semibold" for="checkbox">Home</label>
							</div>
							<!-- address -->
							<p class="mb-6">
								{{$address->name}} {{$address->last_name}}
								<br />

								{{$address->address_line_1}} {{$address->address_line_2}}
								<br />
								{{$address->state}}, {{$address->country}},
								<br />
	
								{{$address->postal_code}}
							</p>
							<!-- btn -->
						{{-- 	<a href="account-address.html#" class="btn btn-info btn-sm">Default address</a> --}}
							<div class="mt-4">
								<a data-bs-toggle="modal" data-bs-target="#editAddressModal"  class="text-inherit">Edit</a>
								<a href="account-address.html#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			@endif
        </div>
    </div>
</div>

@foreach($addresses as $address)
		<!-- Modal -->
		<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<!-- modal content -->
				@include('admin.user.address.partials.delete')
			
			</div>
		</div>
	


		<!-- Modal -->
		<div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<!-- modal content -->
				<div class="modal-content">
					<!-- modal body -->
					<div class="modal-body p-6">
						<div class="d-flex justify-content-between mb-5">
							<div>
								<!-- heading -->
								<h5 class="mb-1" id="addAddressModalLabel">Edit Address</h5>
								<p class="small mb-0">Add new shipping address for your order delivery.</p>
							</div>
							<div>
								<!-- button -->
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
						</div> 
					
							@include('admin.user.address.partials.edit')
					</div>
				</div>
			</div>
		</div>

	
		@endforeach

		<!-- Modal -->
		<div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<!-- modal content -->
				<div class="modal-content">
					<!-- modal body -->
					<div class="modal-body p-6">
						<div class="d-flex justify-content-between mb-5">
							<div>
								<!-- heading -->
								<h5 class="mb-1" id="addAddressModalLabel">New Shipping Address</h5>
								<p class="small mb-0">Add new shipping address for your order delivery.</p>
							</div>
							<div>
								<!-- button -->
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
						</div> 
						@include('admin.user.address.partials.create')
							
					</div>
				</div>
			</div>
		</div>


