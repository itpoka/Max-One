@extends('backend.master')
@section('content')

<!-- main content area start -->
<div class="container-fluid mt-5">
    <div class="card shadow-sm border">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



      <div class="card-header  bg-gradient  py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <h4 class="mb-0"><i class="bi bi-grid-3x3-gap-fill mr-2"></i>Product List</h4>
                            </div>
                            <button style="background: linear-gradient(90deg, #1fbaab 0, #4ba1d9) !important;"
                             type="button" class="btn btn-light d-flex align-items-center"  data-toggle="modal" data-target="#myModal">
                                <i class="bi bi-plus-circle mr-2"></i>Add New Product
                            </button>

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open modal</button> -->
                        </div>
      </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover table-striped text-center align-middle">
                    <thead class="table-primary text-uppercase">
                        <tr  style="background: linear-gradient(90deg, #1fbaab 0, #4ba1d9) !important;">
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Oil Type</th>
                            <th>Oil Category</th>
                            <th>Product Grade</th>
                            <th>Purchased Price</th>
                            <th>Selling Price</th>
                            <th>Discount</th>
                            <th>Live Date</th>
                            <th>Point</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->oil_type_id }}</td>
                            <td>{{ $item->oil_category_id }}</td>
                            <td>{{ $item->grade_id }}</td>
                            <td>{{ $item->purchase_price }}</td>
                            <td>{{ $item->sell_price }}</td>
                            <td>{{ $item->discount_price }}</td>
                            <td>{{ $item->launch_date }}</td>
                            <td>{{ $item->point }}</td>
                            <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group">
                             <button type="button" class="btn btn-outline-success"><i class="bi bi-pencil"  data-toggle="modal" data-target="#myModal"></i></button>
                            <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

              </div>
        </div>
    </div>
</div>
<!-- main content area end -->



<!-- Bootstrap 4 Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg border-0 rounded">

      <!-- Modal Header -->
      <div class="modal-header text-white" style="background: linear-gradient(90deg, #1fbaab 0%, #4b9eff 100%);">
        <h5 class="modal-title font-weight-bold" id="myModalLabel">
          <i class="fa fa-cube mr-2"></i> Add New Product
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form action="{{route('backend.product.add')}}" method="post" >@csrf
          <!-- <form action="{{URL::to('AddNewProduct')}}" method="post" enctype="multipart/form-data">@csrf  -->
          <div class="form-row">

            <div class="form-group col-md-12">
              <label for="name" class="font-weight-bold">Product Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
            </div>

            <div class="form-group col-md-6">
            <label for="oil_type_id" class="font-weight-bold">Oil Type</label>
            <select class="form-control" id="oil_type_id" name="oil_type_id">
                  <option value="">Select Oil Type</option>
                  @foreach(DB::table('oil_types')->where('is_active', 1)->get() as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
            </select>
            </div>


            <div class="form-group col-md-6">
            <label for="oil_category_id" class="font-weight-bold">Oil Category</label>
            <select class="form-control" id="oil_category_id" name="oil_category_id">
                  <option value="">Select Oil Category</option>
                  @foreach(DB::table('oil_categories')->where('is_active', 1)->get() as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
            </select>
            </div>

            <div class="form-group col-md-6">
            <label for="grade_id" class="font-weight-bold">Product Grade</label>
            <select class="form-control" id="grade_id" name="grade_id">
                  <option value="">Select Grade</option>
                  @foreach(DB::table('grades')->get() as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
            </select>
            </div>

    <div class="form-group col-md-6">
        <label for="size" class="font-weight-bold">Size</label>
        <select class="form-control" id="size" name="size">
            <option value="">Select Size</option>
            <option value="1">1 ltr</option>
            <option value="2">2 ltr</option>
            <option value="3">3 ltr</option>
            <option value="4">4 ltr</option>
            <option value="5">5 ltr</option>
            <option value="6">6 ltr</option>
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="measurement_unit" class="font-weight-bold">Measurement Unit</label>
        <select class="form-control" id="measurement_unit" name="measurement_unit">
            <option value="">Select Unit</option>
            <option value="Pcs">Pcs</option>
            <option value="Box">Box</option> 
        </select>
    </div>

            <div class="form-group col-md-6">
              <label for="launch_date" class="font-weight-bold">Launch Date</label>
              <input type="date" class="form-control" id="launch_date" name="launch_date">
            </div>

             <div class="form-group col-md-6">
              <label for="purchase_price" class="font-weight-bold">Purchase Price</label>
              <input type="number" step="0.01" class="form-control" id="purchase_price" name="purchase_price" placeholder="Enter Purchase Price">
            </div>

            <div class="form-group col-md-6">
              <label for="sell_price" class="font-weight-bold">Sell Price</label>
              <input type="number" step="0.01" class="form-control" id="sell_price" name="sell_price" placeholder="Enter Sell Price">
            </div>

            <div class="form-group col-md-6">
              <label for="discount_price" class="font-weight-bold">Discount Price</label>
              <input type="number" step="0.01" class="form-control" id="discount_price" name="discount_price" placeholder="Enter Discount Price">
            </div>

           

             <div class="form-group col-md-6">
              <label for="point" class="font-weight-bold">Point</label>
              <input type="number" class="form-control" id="point" name="point" placeholder="Enter Point">
            </div>

            <div class="form-group col-md-12">
              <label for="description" class="font-weight-bold">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description"></textarea>
            </div>

          </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              <i class="fa fa-times"></i> Cancel
            </button>
            <button type="submit" name="save"  class="btn btn-success" value="Save Now" id="">
              <i class="fa fa-save"></i> Save Product
            </button> 
          </div>
        </form>
      </div>

      <!-- Modal Footer -->
     

    </div>
  </div>
</div>

@endsection
