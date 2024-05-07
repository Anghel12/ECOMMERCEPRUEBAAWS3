<x-app-layout>

   <!-- main -->
   <main class="main-content-wrapper">
      <div class="container">
         <div class="row mb-8">
            <div class="col-md-12">
               <!-- page header -->
               <div class="d-md-flex justify-content-between align-items-center">
                  <div>
                     <h2>Products</h2>
                     <!-- breacrumb -->
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                           <li class="breadcrumb-item"><a href="products.html#" class="text-inherit">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                     </nav>
                  </div>
                  <!-- button -->
                  <div>
                     <a href="{{ url('admin/products/create') }}" class="btn btn-primary">Add Product</a>
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
                                       <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                       <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                 </th>
                                 <th>ID</th>
                                 <th>Role</th>
                                 <th>Usuarios asignados</th>
                                 <th>Hora de actualizacion</th>
                                 <th>Hora de creación</th>
                                 <th></th>
                              </tr>
                           </thead>

                           <tbody>
                              @foreach ($roles as $role)


                              <tr>
                                 <td> {{$role->id }} </td>
                                 <td>{{$role->name }} </td>
                                 <td>{{$role->users->count() }} </td>
                                 <td>{{$role->updated_at->diffForHumans() }} </td>
                                 <td>{{$role->created_at->diffForHumans() }} </td>

                          {{--        <td>
                                    @if ($product->status == 'active')
                                    <span class="badge bg-light-primary text-dark-primary">Active</span>
                                    @elseif ($product->status == 'inactive')
                                    <span class="badge bg-light-danger text-dark-danger">Inactive</span>
                                    @elseif ($product->status == 'out_of_stock')
                                    <span class="badge bg-light-warning text-dark-warning">Out of Stock</span>
                                    @endif

                                 </td> --}}
                      
                                 <td>
                                    <div class="dropdown">
                                       <a href="products.html#" class="text-reset" data-bs-toggle="dropdown"
                                          aria-expanded="false">
                                          <i class="feather-icon icon-more-vertical fs-5"></i>
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li>


                                             <a class="dropdown-item"
                                                href="{{route('super_admin.roles.edit', $role)}}">
                                                <i class="bi bi-pencil-square me-3"></i>
                                                Edit
                                             </a>


                                          </li>
                                          <li>
                                             <form action="{{route('super_admin.roles.destroy', $role)}}"
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
                           <li class="page-item disabled"><a class="page-link" href="products.html#!">Previous</a></li>
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