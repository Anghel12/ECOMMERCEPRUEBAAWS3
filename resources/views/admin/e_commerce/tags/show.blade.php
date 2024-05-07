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
                                <table
                                    class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="checkAll" />
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>Post con este tag:</th>
                                            <th>Hora de creacion</th>
                                            <th>Hora de actualizacion</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($tags as $tag)

                                        <tr>
                                            <td> {{$tag->id}} </td>
                                            <td> {{$tag->name}} </td>
                                            <td>{{$tag->posts->count() }} </td>
                                            <td>{{$tag->updated_at->diffForHumans() }} </td>
                                            <td>{{$tag->created_at->diffForHumans() }} </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="products.html#" class="text-reset"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>


                                                            <a class="dropdown-item"
                                                                href="{{route('admin.e_commerce.tags.edit', $tag)}}">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>


                                                        </li>
                                                        <li>
                                                            <form
                                                                action="{{route('admin.e_commerce.tags.destroy', $tag)}}"
                                                                method="post">
                                                                @csrf
                                                                @method('Delete')
                                                                <button class="dropdown-item" type="submit">
                                                                    <i class="bi bi-trash me-3"></i>
                                                                    Delete
                                                                </button>

                                                            </form>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>


                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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