{!! Form::model($address, ['route' => ['admin.user.address.update', $address], 'autocomplete' => 'off', 'method' => 'PUT']) !!}
    <!-- row -->
    <div class="row g-2">
        <!-- col -->
        <div class="col-12">
            <!-- input -->
            <input type="text" id="name" name="name" class="form-control" placeholder="First name" aria-label="First name" value="{{ $address->name }}" />
        </div>

        @error('name')
        <span class="text-danger"> {{ $message }} </span>
        @enderror

        <!-- col -->
        <div class="col-12">
            <!-- input -->
            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name" value="{{ $address->last_name }}" />
        </div>

        @error('last_name')
        <span class="text-danger"> {{ $message }} </span>
        @enderror

        <!-- col -->
        <div class="col-12">
            <!-- input -->
            <input type="text" id="address_line_1" name="address_line_1" class="form-control" placeholder="Address Line 1" value="{{ $address->address_line_1 }}" />
        </div>

        @error('address_line_1')
        <span class="text-danger"> {{ $message }} </span>
        @enderror 

        <!-- col -->
        <div class="col-12">
            <!-- input -->
            <input type="text" id="address_line_2" name="address_line_2" class="form-control" placeholder="Address Line 2" value="{{ $address->address_line_2 }}" />
        </div>

        @error('address_line_2')
        <span class="text-danger"> {{ $message }} </span>
        @enderror  

        <!-- col -->
        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{ $address->city }}" />
        @error('city')
        <span class="text-danger"> {{ $message }} </span>
        @enderror

        <!-- col -->
        <div class="col-12">
            <!-- form select -->
            <select name="country" id="country" class="form-select">
                <option selected>{{ $address->country }}</option>
                <option value="1">UK</option>
                <option value="2">USA</option>
                <option value="3">UAE</option>
            </select>
            @error('country')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <!-- col -->
        <div class="col-12">
            <!-- form select -->
            <select class="form-select" id="state" name="state">
                <option selected>{{ $address->state }}</option>
                <option value="1">Northern Ireland</option>
                <option value="2">Alaska</option>
                <option value="3">Abu Dhabi</option>
            </select>
            @error('state')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <!-- col -->
        <div class="col-12">
            <!-- input -->
            <input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="Zip Code" value="{{ $address->postal_code }}" />
            @error('postal_code')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <!-- col -->
        <div class="col-12">
            <!-- form check -->
            <div class="form-check">
                <input class="form-check-input" name="is_default" id="checkbox" type="checkbox" value="1" {{ $address->is_default ? 'checked' : '' }} />
                <label class="form-check-label" for="checkbox">Set as Default</label>
            </div>
        </div>

        <!-- col -->
        <div class="col-12 text-end">
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Save Address</button>
        </div>
    </div>
{!! Form::close() !!}
