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
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Oil Type List</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-success">
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($oil_types as $index => $oil_type)
                                                <tr>
                                                    <th scope="row">{{ $index + 1 }}</th>
                                                    <td>{{ $oil_type->name }}</td>
                                                    <td><i class="ti-trash"></i></td>
                                                </tr>
                                            @endforeach

                                                
                                            
                                            </tbody>
                                        </table>
                                    </div>
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
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Oil category List</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-success">
                                                <tr class="text-white">
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
                                                    <td><i class="ti-trash"></i></td>
                                                </tr>
                                            @endforeach

                                                
                                            
                                            </tbody>
                                        </table>
                                    </div>
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