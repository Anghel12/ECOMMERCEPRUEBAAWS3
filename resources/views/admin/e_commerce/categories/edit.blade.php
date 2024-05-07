<x-app-layout>
     <!-- main -->
     <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
           <!-- row -->
           <div class="row mb-8">
              <div class="col-md-12">
                 <div class="d-md-flex justify-content-between align-items-center">
                    <!-- page header -->
                    <div>
                       <h2>Edit Category</h2>
                       <!-- breacrumb -->
                       <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mb-0">
                             <li class="breadcrumb-item"><a href="add-category.html#" class="text-inherit">Dashboard</a></li>
                             <li class="breadcrumb-item"><a href="add-category.html#" class="text-inherit">Categories</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                          </ol>
                       </nav>
                    </div>
                    <div>
                       <a href="{{ url('admin/categories') }}" class="btn btn-light">Back to Categories</a>
                    </div>
                 </div>
              </div>
           </div>
           {!! Form::model($category, ['route' => ['admin.e_commerce.categories.update', $category], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}
        

           {{--    {!! Form::open(['route' => 'admin.e_commerce.categories.store'], 'enctype' => 'multipart/form-data') !!}
   
    --}}
    @include('admin.e_commerce.categories.partials.form')
    {!! Form::close() !!}
 
        </div>
     </main>
</x-app-layout>
