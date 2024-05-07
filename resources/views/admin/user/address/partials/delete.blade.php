<div class="modal-content">
    <!-- modal header -->
    <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete address</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <!-- modal body -->
    <div class="modal-body">
        <h6>Are you sure you want to delete this address?</h6>
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
    </div>
    <!-- modal footer -->
    <div class="modal-footer">
        <!-- btn -->
        <button type="button" class="btn btn-outline-gray-400" data-bs-dismiss="modal">Cancel</button>
        
        {!! Form::model($address, ['route' => ['admin.user.address.destroy', $address], 'method' => 'DELETE']) !!}
            <button type="submit"  class="btn btn-danger">Eliminar Dirección</button>
        {!! Form::close() !!}

    </div>
</div>