<div class="row">
    <div class="col-lg-12 col-12">
        <!-- card -->
        <div class="card mb-6 shadow border-0">
            <!-- card body -->
            <div class="card-body p-6">
                <h4 class="mb-5 h5">Category Image</h4>
                <div class="mb-4 d-flex">
                    <div class="position-relative">
                      
                        @foreach($category->images as $image)
                        <img class="image icon-shape icon-xxxl bg-light rounded-4"
                             src="{{ Storage::url($image->url) }}" alt="Image" />
                    @endforeach
                    
                        <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                            {!! Form::file('file', ['class' =>'minimal-img', 'accept' => 'image/*', 'multiple' => false]) !!}
                          
                            <span class="icon-shape icon-sm rounded-circle bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                    class="bi bi-pencil-fill text-muted" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </span>
                        </div> 
                    </div>
                </div>
                <h4 class="mb-4 h5 mt-5">Category Information</h4>

                <div class="row">
                    <!-- input -->
                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Category Name"
                            value="{{ $category->name ?? '' }}" />

                        @error('name')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <!-- input -->
                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Slug</label>
                        <input name="slug" type="text" id="slug" class="form-control" placeholder="Slug"
                            value="{{ $category->slug ?? '' }}" />

                        @error('slug')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <!-- input -->
                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Parent Category</label>
                        <select class="form-select">
                            <option selected>Category Name</option>
                            <option value="Dairy, Bread & Eggs">Dairy, Bread & Eggs</option>
                            <option value="Snacks & Munchies">Snacks & Munchies</option>
                            <option value="Fruits & Vegetables">Fruits & Vegetables</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Date</label>
                        <input type="text" class="form-control flatpickr" placeholder="Select Date" />
                    </div>

                    <div></div>
                    <!-- input -->
                    <div class="mb-3 col-lg-12">
                        <label class="form-label">Descriptions</label>

                        {!! Form::textarea('description', null, ['class' => 'form-input']) !!}    </div>

                    <!-- input -->
                    <div class="mb-3 col-lg-12">
                        <label class="form-label" id="productSKU">Status</label>
                        <br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="active" value="active" {{
                                $category->status === 'active' ? 'checked' : '' }} />
                            <label class="form-check-label" for="active">Active</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive" {{
                                $category->status === 'inactive' ? 'checked' : '' }} />
                            <label class="form-check-label" for="inactive">Disabled</label>
                        </div>
                    </div>


                    <div class="mb-3 col-lg-12 mt-5">
                        <h4 class="mb-4 h5">Meta Data</h4>
                        <!-- input -->
                        <div class="mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="Mname" id="name" class="form-control" placeholder="Title" />
                        </div>

                        <!-- input -->
                        <div class="mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control" name="Mdescription" id="description" rows="3"
                                placeholder="Meta Description"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">Create Product</button>
                        <button type="submit" class="btn btn-secondary ms-2">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>