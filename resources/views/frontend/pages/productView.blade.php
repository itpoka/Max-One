@extends('frontend.master')
@section('content')

<div class="container">
    <div class="row align-items-center">
      <!-- Product Image -->
      <div class="col-md-5 text-center p-5">
        <img src="frontend/img/web.png"  class="img-fluid" alt="Mobil Super 4T 20W-50">
      </div>

      <!-- Product Details -->
      <div class="col-md-7">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb small">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Motorcycle engine oils</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mobil Super™ 4T 20W-50</li>
          </ol>
        </nav>

        <h3 class="fw-bold">Mobil Super™ 4T 20W-50</h3>
        <p class="text-muted mb-1">1 Liter</p>
        <h4 class="text-primary fw-bold">BDT 625</h4>
        <p class="text-success">Earn 6 points!</p>

        <hr>

        <h6 class="fw-bold">High Performance Four-Stroke Motorcycle Engine Oil</h6>
        <p class="text-muted">
          Mobil Super™ 4T 20W-50 is high performance conventional four-stroke motorcycle engine oil primarily intended for general use in all types of four-stroke motorcycles and engines.
        </p>

        <!-- Quantity + Buttons -->
        <div class="d-flex align-items-center mb-3">
          <button class="btn btn-outline-dark btn-sm">-</button>
          <input type="text" value="1" class="form-control text-center mx-2" style="width:60px;">
          <button class="btn btn-outline-dark btn-sm">+</button>
        </div>

        <div class="d-flex gap-2">
          <button class="btn btn-primary">Buy Now</button>
          <button class="btn btn-dark">Add to Cart</button>
        </div>

        <hr>

        <p class="mb-0"><strong>Category :</strong> Motorcycle engine oils</p>
      </div>
    </div>










  <style>
    /* Base style */
    .nav-tabs .nav-link {
      color: #000;                   /* Default black text */
      border: none;
      border-radius: 0;
      background: transparent;
      position: relative;
      overflow: hidden;
      transition: color 0.3s ease;
    }

    /* Gradient background for hover effect */
    .nav-tabs .nav-link::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000;
      transform: translateY(100%);   /* Start from bottom (hidden) */
      transition: transform 0.3s ease;
      z-index: -1; /* keep background behind text */
    }

    /* Hover → swipe up effect */
    .nav-tabs .nav-link:hover::before {
      transform: translateY(0); /* Fill up */
    }
    .nav-tabs .nav-link:hover {
      color: #fff !important;
    }

    /* Active tab stays black */
    .nav-tabs .nav-link.active {
      background-color: #000 !important;
      color: #fff !important;
    }
    .nav-tabs .nav-link.active::before {
      transform: translateY(0); /* Active full black */
    }

    /* Table row borders */
    .table tbody tr {
      border-bottom: 1px solid #dee2e6;
    }
    .table thead th {
      border-bottom: 2px solid #dee2e6;
    }
  </style>
   <!-- Tabs Navigation -->
  <ul class="nav nav-tabs mb-4" id="productTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active fw-semibold" id="features-tab" data-bs-toggle="tab" data-bs-target="#features" type="button" role="tab">
        Features and Benefits
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="applications-tab" data-bs-toggle="tab" data-bs-target="#applications" type="button" role="tab">
        Applications
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">
        Specifications and Approvals
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="properties-tab" data-bs-toggle="tab" data-bs-target="#properties" type="button" role="tab">
        Properties and Specifications
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="safety-tab" data-bs-toggle="tab" data-bs-target="#safety" type="button" role="tab">
        Health and Safety
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="refund-tab" data-bs-toggle="tab" data-bs-target="#refund" type="button" role="tab">
        Refund and Return Policy
      </button>
    </li>
  </ul>

  <!-- Tabs Content -->
  <div class="tab-content" id="productTabsContent">
    
    <!-- Features Tab -->
    <div class="tab-pane fade show active mt-5 mb-5" id="features" role="tabpanel">
      <p>
        Mobil Super 4T 10W-30, 15W-40, 20W-40 and 20W-50 combine highly refined, quality mineral oils and an advanced additive system to provide good engine cleanliness, good wear protection and corrosion protection. 
        Key features and benefits include:
      </p>

      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr class="text-muted small">
              <th scope="col">Features</th>
              <th scope="col">Advantages and Potential Benefits</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Good wear protection</td>
              <td>Helps extend engine life.</td>
            </tr>
            <tr>
              <td>Thermal and oxidation stability</td>
              <td>Helps keep engines clean for smoother operation.</td>
            </tr>
            <tr>
              <td>Good corrosion protection</td>
              <td>Protects critical engine components.</td>
            </tr>
            <tr>
              <td>Broad viscosity range</td>
              <td>Year round engine protection and performance.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Applications Tab -->
    <div class="tab-pane fade" id="applications" role="tabpanel">
      <p>Applications content here...</p>
    </div>

    <!-- Specs Tab -->
    <div class="tab-pane fade" id="specs" role="tabpanel">
      <p>Specifications and Approvals content here...</p>
    </div>

    <!-- Properties Tab -->
    <div class="tab-pane fade" id="properties" role="tabpanel">
      <p>Properties and Specifications content here...</p>
    </div>

    <!-- Safety Tab -->
    <div class="tab-pane fade" id="safety" role="tabpanel">
      <p>Health and Safety content here...</p>
    </div>

    <!-- Refund Tab -->
    <div class="tab-pane fade" id="refund" role="tabpanel">
      <p>Refund and Return Policy content here...</p>
    </div>

  </div>
</div>
















      <!-- for load more option start div -->
<div class="container py-5 motorcycle-container">
<div class="d-flex align-items-center justify-content-center mb-4">
  <div class="flex-grow-1 border-top"></div>
  <h3 class="px-3 m-0 fw-bold" style="font-size:18px;">Related Products</h3>
  <div class="flex-grow-1 border-top"></div>
</div>


  <div class="row g-4" id="motor-product-list">
  



  <div class="col-6 col-lg-3 product">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>





  <div class="col-6 col-lg-3 product">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>







  <div class="col-6 col-lg-3 product">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>





  <div class="col-6 col-lg-3 product">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>


  
  <div class="col-6 col-lg-3 product d-none">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>






  <div class="col-6 col-lg-3 product d-none">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>







  <div class="col-6 col-lg-3 product d-none">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>



  <div class="col-6 col-lg-3 product d-none">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        Mobil Super™ All-In-One Protection 0W-16
      </h6>
      <span class="text-muted small d-block">Size: 2Ltr</span>
      <span class="d-block fw-bold text-success fs-6 mt-2">BDT 5,700</span>

      <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold rounded-pill px-3 py-1 custom-btn"
            onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
            onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
            style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-cart me-2" style="font-size: 1rem;"></i> Add to Cart
    </button>
    </div>
  </div>
</div>



  <div class="text-center mt-4" id="loadMoreMotor">
    <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold  px-3 py-1"
        onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
        onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
        style="font-size: 0.9rem; white-space: nowrap;">
  <i class="bi bi-arrow-down-circle me-2" style="font-size: 1rem;"></i> Load More
</button>



    <!-- <button id="loadMoreMotor" class="btn btn-primary">Load More</button> -->
  </div>
</div>
 </div>


 </div>






<script>
function setupLoadMore(buttonId, containerSelector) {
  let loadMoreBtn = document.getElementById(buttonId);
  let hiddenProducts = document.querySelectorAll(containerSelector + ' .product.d-none');
  let currentIndex = 0;
  let step = 4;

  loadMoreBtn.addEventListener('click', function() {
    for (let i = currentIndex; i < currentIndex + step; i++) {
      if (hiddenProducts[i]) {
        hiddenProducts[i].classList.remove('d-none');
      }
    }
    currentIndex += step;

    if (currentIndex >= hiddenProducts.length) {
      loadMoreBtn.style.display = 'none';
    }
  });
}

// Motorcycle
setupLoadMore("loadMoreMotor", "#motor-product-list");

 
</script>




 

@endsection