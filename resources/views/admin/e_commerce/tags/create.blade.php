<x-app-layout>

    <!-- main -->
    <main class="main-content-wrapper">
        <div class="container">
            <div class="row mb-8">
                <div class="col-md-12">
                    <!-- page header -->
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div>
                            <h2>Tags</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="products.html#" class="text-inherit">Admin</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Tags</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="{{route('admin.e_commerce.tags.create')}}" class="btn btn-primary">Add Tags</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lg">
                        <div class="px-6 py-6">
                            <div class="row justify-content-between">
                                <!-- form -->
                                <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                                    <form class="d-flex" role="search">
                                        <input class="form-control" type="search" placeholder="Search Products"
                                            aria-label="Search" />
                                    </form>
                                </div>
                                <!-- select option -->
                                <div class="col-lg-2 col-md-4 col-12">
                                    <select class="form-select">
                                        <option selected>Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Deactive</option>
                                        <option value="3">Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body p-0">
                            <!-- table -->
                            <div class="table-responsive">

                                {!! Form::open( ['route' => 'admin.tags.store']) !!}

                                @include('admin.tags.partials.form')
                    
                                {!! Form::submit('crear tags', ['class' => 'btn btn-primary']) !!}
                                
                                {!! Form::close() !!}
                                
                        </div>
                        <div class="border-top d-md-flex justify-content-between align-items-center px-6 py-6">
                            <span>Showing 1 to 8 of 12 entries</span>
                            <nav class="mt-2 mt-md-0">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled"><a class="page-link"
                                            href="products.html#!">Previous</a></li>
                                    <li class="page-item"><a class="page-link active" href="products.html#!">1</a></li>
                                    <li class="page-item"><a class="page-link" href="products.html#!">2</a></li>
                                    <li class="page-item"><a class="page-link" href="products.html#!">3</a></li>
                                    <li class="page-item"><a class="page-link" href="products.html#!">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</x-app-layout>