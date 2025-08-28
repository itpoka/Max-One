@extends('backend.master')
@section('content')


<!-- main content area start -->
        <div class="main-content">
           <div class="main-content-inner">
                <div class="row">
                    <!-- table primary start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                @if (session('success'))
                                    <div style="padding:10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; margin-bottom:15px;">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h4 class="header-title">Oil Type</h4>
                                 @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                <form action="{{route('backend.oil.type.add')}}" method="post">@csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- table primary end -->
                    <!-- table success start -->
                <div class="container-fluid col-lg-6 mt-5">
                    <div class="card shadow-sm border">
                    <div class="card-header  bg-gradient  py-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-3">
                                                <h4 class="mb-0"><i class="bi bi-grid-3x3-gap-fill mr-2"></i>Oil Type List</h4>
                                            </div>
                                            </div>
                    </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table   class="table table-bordered table-hover table-striped text-center align-middle">
                                    <thead class="table-primary text-uppercase">
                                        <tr  style="background: linear-gradient(90deg, #1fbaab 0, #4ba1d9) !important;">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tbody>
                                    @foreach ($oil_types as $index => $oil_type)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $oil_type->name }}</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm" role="group"> 
                                            <button type="button" class="btn btn-outline-success"><i class="bi bi-pencil"></i></button>
                                            <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>

                                        </td>
                                    </tr>
                                    @endforeach
                                            
                                    </tbody>
                                </table>

                                <!-- Optional: Pagination -->
                                {{-- {{ $products->links('pagination::bootstrap-5') }} --}}
                            </div>
                        </div>
                    </div>
                </div>  

  <!-- table success end -->
</div>

                {{-- =============
                Oil Category
                ============= --}}

                     <div class="row">
                    <!-- table primary start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                @if (session('success'))
                                    <div style="padding:10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; margin-bottom:15px;">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h4 class="header-title">Oil Category</h4>
                                 @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                <form action="{{route('backend.oil.category.add')}}" method="post">@csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                                        
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- table primary end -->
                    <!-- table success start -->

 <div class="container-fluid col-lg-6 mt-5">
                    <div class="card shadow-sm border">
                    <div class="card-header  bg-gradient  py-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-3">
                                                <h4 class="mb-0"><i class="bi bi-grid-3x3-gap-fill mr-2"></i>Oil Category</h4>
                                            </div>
                                            </div>
                    </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped text-center align-middle">
                                    <thead class="table-primary text-uppercase">
                                        <tr  style="background: linear-gradient(90deg, #1fbaab 0, #4ba1d9) !important;">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($oil_categories as $index => $oil_category)
                                                <tr>
                                                    <th scope="row">{{ $index + 1 }}</th>
                                                    <td>{{ $oil_category->name }}</td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-sm" role="group"> 
                                                        <button type="button" class="btn btn-outline-success"><i class="bi bi-pencil"></i></button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>

                                                    </td>
                                                </tr>
                                            @endforeach

                                         </tbody>
                                </table>

                                <!-- Optional: Pagination -->
                                {{-- {{ $products->links('pagination::bootstrap-5') }} --}}
                            </div>
                        </div>
                    </div>
                </div>   
                    <!-- table success end -->
                   
                </div>

               {{-- =============
                Oil Category end
                ============= --}}
            </div>
            
        </div>
        <!-- main content area end -->
      @endsection