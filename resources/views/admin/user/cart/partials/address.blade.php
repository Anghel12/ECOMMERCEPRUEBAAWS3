<div class="accordion-item py-4">
    <div class="d-flex justify-content-between align-items-center">
        <!-- heading one -->
        <a href="shop-checkout.html#" class="fs-5 text-inherit collapsed h4"
            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
            aria-expanded="true" aria-controls="flush-collapseOne">
            <i class="feather-icon icon-map-pin me-2 text-muted"></i>
            Add delivery address
        </a>
        <!-- btn -->
        <a href="shop-checkout.html#" class="btn btn-outline-primary btn-sm"
            data-bs-toggle="modal" data-bs-target="#addAddressModal">Add a new
            address</a>
        <!-- collapse -->
    </div>
    <div id="flush-collapseOne" class="accordion-collapse collapse show"
        data-bs-parent="#accordionFlushExample">
        <div class="mt-5">
            <div class="row">
                @foreach ($addresses as $address)
                <div class="col-xl-6 col-lg-12 col-md-6 col-12 mb-4">
                    <!-- form -->
                    <div class="card card-body p-6">
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio"
                                name="flexRadioDefault" id="homeRadio" checked />
                            <label class="form-check-label text-dark"
                                for="homeRadio">Home</label>
                        </div>
                        <!-- address -->
                        <address>
                            <p class="mb-6">
                                {{$address->name}} {{$address->last_name}}
                                <br />

                                {{$address->address_line_1}}
                                {{$address->address_line_2}}
                                <br />
                                {{$address->state}}, {{$address->country}},
                                <br />

                                {{$address->postal_code}}
                            </p>
                        </address>

                        <a href="account-address.html#" class="btn btn-info btn-sm">Default address</a>
                        <div class="mt-4">
                            <a data-bs-toggle="modal" data-bs-target="#editAddressModal"  class="text-inherit">Edit</a>
                            <a href="account-address.html#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach ($addresses as $address)

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