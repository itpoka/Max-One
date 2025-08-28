@extends('frontend.master')

@section('content')

    <div  >
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="frontend/img/car.jpg" class="d-block w-100" alt="..."  >
      
    </div>
    <div class="carousel-item">
      <img src="frontend/img/bike.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="frontend/img/car.jpg" class="d-block w-100" alt="...">
     
    </div>
     <div class="carousel-item">
      <img src="frontend/img/bike.jpg" class="d-block w-100" alt="...">
     
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 
</div>
 
<style>
.category-card {
  width: 100%;  
  border-right: 1px solid rgb(225, 228, 230);
  border-bottom: 1px solid rgb(225, 228, 230);
  position: relative;
  overflow: hidden;
  cursor: pointer;
  text-align: center;
}

.category-card img {
  width: 100%;
  display: block;
}

.category-title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-weight: 700;
  color: #000;
  text-align: center;
  z-index: 2;
  pointer-events: none;
}

.category-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.4);
  color: white;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  padding: 15px;
  opacity: 0;
  transform: translateY(100%);
  transition: transform 0.5s cubic-bezier(0.25, 1, 0.3, 1), opacity 0.4s ease;
}

.category-card:hover .category-overlay {
  transform: translateY(0);
  opacity: 1;
}

.category-overlay p {
  margin: 0;

}
 
@media (min-width: 1200px) {
  .col-lg-2 { 
    flex: 0 0 20%;
    max-width: 20%;
  }
}

@media (max-width: 767px) {
  .col-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
}

.row.g-0 {
  margin-right: 0;
  margin-left: 0;
}

.row.g-0 > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}
</style>

<section class="container-fluid p-0">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="row g-0 justify-content-center">
    <div class="col-6 col-lg-2">
        <a href="http://127.0.0.1:8000/carEngineOils" class="text-decoration-none">
      <div class="category-card">
        <img src="https://portal.mjlbl.com/uploads/category/624ad9fe9348c.svg" alt="Car Engine Oils">
        <h4 class="category-title">Car Engine Oils</h4>
        <div class="category-overlay">
          <p>View all</p>
        </div>
      </div>
          </a>
    </div>
    <div class="col-6 col-lg-2">
        <a href="http://127.0.0.1:8000/motorcycleEngineOils" class="text-decoration-none">
      <div class="category-card">
        <img src="https://portal.mjlbl.com/uploads/category/624adeafba68a.svg" alt="Motorcycle Engine Oils">
        <h4 class="category-title">Motorcycle Engine Oils</h4>
        <div class="category-overlay">
          <p>View all</p>
        </div>
      </div>
        </a>
    </div>
    <div class="col-6 col-lg-2">
      <div class="category-card">
        <img src="https://portal.mjlbl.com/uploads/category/624adeafb80c0.svg" alt="Bus & Truck Engine Oils">
        <h4 class="category-title">Bus & Truck Engine Oils</h4>
        <div class="category-overlay">
          <p>View all</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-lg-2">
      <div class="category-card">
        <img src="https://portal.mjlbl.com/uploads/category/624adf100c648.svg" alt="Vehicle Care & Other Lubricants">
        <h4 class="category-title">Vehicle Care & Other Lubricants</h4>
        <div class="category-overlay">
          <p>View all</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-lg-2">
      <div class="category-card">
        <img src="https://portal.mjlbl.com/uploads/category/624adf1d9f245.svg" alt="Industrial & Specialty Lubricants">
        <h4 class="category-title">Industrial & Specialty Lubricants</h4>
        <div class="category-overlay">
          <p>View all</p>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="container row" style=" margin-top:20px;">
						<div class="col-md-7">
                            <div class="blog-posts post-page">
                                        <article>
                                          <div >
                                            <div class="welcome">
                                              <h1 class="blue-gray-divider blue-gray-divider-gray">Welcome<span>&nbsp;</span></h1>
                                              <div>The journey of Max-One spans decades of resilience, vision, and growth — evolving from a humble tailoring shop to a trusted leader in multiple industries.…</div>
                                              <a class="learn-more" href="https://www.bashundharalpgas.com/page/welcome"><span>Learn More</span></a>
                                            </div>
                                          </div>
                                         
                                        </article>
                          </div>
	
						</div> <!-- col-md -->
             <div class="col-md-5">
                                            <img style="width: 100%;" src="frontend/img/cover4.png" alt="Welcome">
                                          </div>
					</div> <!-- row -->
			</section>

<!-- Max-One Lubricant Products Section -->



<!-- Max-One Lubricant Products End -->

<style>
  .card {
  position: relative;
  overflow: hidden;
  transition: all 0.3s;
  box-shadow: 0 1px 3px rgba(0,0,0,.25)!important;
}

/* Hover animation for card */
.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 14px 28px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.1)!important;
}

/* Quick View Overlay (hidden by default) */
.quick-view {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: rgba(0,0,0,0.6);
  color: #fff;
  text-align: center;
  padding: 10px;
  font-weight: bold;
  transition: all 0.3s ease;
  cursor: pointer;

  opacity: 0;
  visibility: hidden;
}

/* Show on hover */
.card:hover .quick-view {
  opacity: 1;
  visibility: visible;
}
  @media (max-width: 576px) {
    .custom-btn {
      font-size: 0.75rem !important;   /* font choto */
      padding: 0.25rem 0.75rem !important; /* height/width choto */
      border-radius: 20px !important;  /* round thakbe */
    }
    .custom-btn i {
      font-size: 0.85rem !important;   /* icon o choto */
    }
  }
</style>


<div class="container my-5">
<h3 class="line_h3 lh-1"> 
  <b class="section-title"></b> <div><h4 class="text-warning text-center">High performance</h4> 
<span class="text-center" style="font-size:18px;font-weight:bold;"> Lubricating Oil / Products We Provide</span>
</div> <b class="section-title"></b>
 </h3>

  <div class="row g-4">

   <div class="col-6 col-lg-3">
   
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
        <a href="http://127.0.0.1:8000/productView" class="text-decoration-none text-dark">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid p-3" alt="Motorcycle Engine Oil">
      </a>
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
      <div class="quick-view" data-bs-toggle="modal" data-bs-target="#quickViewProduct">Quick View1</div>
    </div>

    <div class="card-body text-center p-3">
      <span class="text-muted small d-block">Full Synthetic</span>
      <h6 class="card-title fw-bold mb-2 ">
        MMobil Super™ All-In-One Protection 0W-16
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








<div class="col-6 col-lg-3">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
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









<div class="col-6 col-lg-3">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
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





<div class="col-6 col-lg-3">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
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






<div class="col-6 col-lg-3">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
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





<div class="col-6 col-lg-3">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
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





<div class="col-6 col-lg-3">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
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





<div class="col-6 col-lg-3">
  <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="position-relative">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">New</span> -->
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
    <!-- duplicate this col-6 col-lg-3 for other products -->
    
  </div>
</div>






 <style>
    .card-custom {
      position: relative;
      overflow: hidden;
      border: none;
      border-radius: 0;
      cursor: pointer;
    }

    .card-custom img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* overlay covers text but stops before button */
    .card-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: calc(100% - 65px); /* leave space for button */
      background: rgba(128, 128, 128, 0.6); /* gray transparent */
      transform: translateY(0);
      transition: transform 0.5s ease;
      z-index: 3; /* covers text */
    }

    /* hover -> swipe up */
    .card-custom:hover .card-overlay {
      transform: translateY(-100%);
    }

    /* text under overlay */
    .card-content {
      position: absolute;
      top: 20%;
      left: 10%;
      color: #000;
      max-width: 80%;
      z-index: 2;
    }

    .card-content h3 {
      font-weight: bold;
    }

    /* button always visible */
    .btn-circle {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      background: #000;
      color: #fff;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.3s ease;
      position: absolute;
      bottom: 20px;
      right: 20px;
      z-index: 4; /* above overlay */
    }

    .card-custom:hover .btn-circle {
      background: #e30613; /* red */
    }
  </style>

   <div class="container my-5">
    <div class="row g-3">
      
      <!-- Card 1 -->
      <div class="col-md-6">
        <div class="card-custom">
          <img  src="frontend/img/info.jpg"  alt="Oil">
          <div class="card-overlay"></div>
          <div class="card-content">
            <h3>Find the right product</h3>
            <p>Browse through to choose the right product which will redefine your vehicle’s optimum performance and maximum mileage.</p>
          </div>
          <!-- <button class="btn-circle">
            <i class="bi bi-chevron-right"></i>
          </button> -->

          <button class="btn btn-circle" onclick="window.location.href='http://127.0.0.1:8000/chooseProduct'">
            <i class="bi bi-chevron-right"></i>
          </button>

        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="col-md-6">
        <div class="card-custom">
          <img  src="frontend/img/retailer.jpg" alt="Retailer">
          <div class="card-overlay"></div>
          <div class="card-content">
            <h3>Find a retailer</h3>
            <p>Search for the nearest workshop or retail store with various Mobil™ products perfect for your vehicle’s health and long life.</p>
          </div>
          
          <button class="btn btn-circle" onclick="window.location.href='http://127.0.0.1:8000/distributor'">
            <i class="bi bi-chevron-right"></i>
            </button>

        </div>
      </div>

    </div>
  </div>














<!-- motor cycle er product -->

<section class="container d-flex align-items-center text-white mt-5 mb-5" 
         style="background: url('frontend/img/bike.jpg') center/cover no-repeat; min-height: 400px;">
  <div>
    <div class="row">
      <div class="col-md-12 d-flex flex-column justify-content-center bg-opacity-50 p-4 rounded">
        
        <!-- বড় টাইটেল -->
        <h1 class="fw-bold display-3">Motorcycle engine oils</h1>
        
        <!-- paragraph নিচে আনা -->
        <p class="mt-4">
        The supreme nature of our engine oil redefines the smoothness and elegance of the motorcycle’s performance on the road.
        </p>

        <!-- ছোট ফিক্সড-উইডথ বাটন -->
        <a href="http://127.0.0.1:8000/motorcycleEngineOils" class="btn btn-light rounded-pill mt-2 px-3 py-1" style="width:120px;">
          View All
        </a>
      </div>
    </div>
  </div>
</section>






      <!-- for load more option start div -->
<div class="container py-5 motorcycle-container">
<div class="d-flex align-items-center justify-content-center mb-4">
  <div class="flex-grow-1 border-top"></div>
  <h3 class="px-3 m-0 fw-bold" style="font-size:18px;">Motorcycle Engine oils</h3>
  <div class="flex-grow-1 border-top"></div>
</div>


  <div class="row g-4" id="motor-product-list">
  <!-- Product cards -->
  <!-- <div class="col-6 col-sm-6 col-lg-3 product">
    <div class="card h-100 border-0">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
      <div class="card-body text-center">
        <h5 class="card-title mb-0">SAE 20W40 <br> API SLAJASo MA2</h5>
      </div>
    </div>
  </div> -->




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





<!-- 
  <div class="col-6 col-sm-6 col-lg-3 product">
    <div class="card h-100 border-0">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
      <div class="card-body text-center">
        <h5 class="card-title mb-0">SAE 20W40 <br> API SLAJASo MA2</h5>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-6 col-lg-3 product">
    <div class="card h-100 border-0">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
      <div class="card-body text-center">
        <h5 class="card-title mb-0">SAE 20W40 <br> API SLAJASo MA2</h5>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-6 col-lg-3 product">
    <div class="card h-100 border-0">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
      <div class="card-body text-center">
        <h5 class="card-title mb-0">SAE 20W40 <br> API SLAJASo MA2</h5>
      </div>
    </div>
  </div> -->

  <!-- Hidden cards for Load More -->
  <!-- <div class="col-6 col-sm-6 col-lg-3 product d-none">
    <div class="card h-100 border-0">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
      <div class="card-body text-center">
        <h5 class="card-title mb-0">Product 5</h5>
      </div>
    </div>
  </div> -->

  
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










<!-- Car engine oils -->

<section class="container d-flex align-items-center text-white mt-5 mb-5" 
         style="background: url('frontend/img/car.jpg') center/cover no-repeat; min-height: 400px;">
  <div>
    <div class="row">
      <div class="col-md-12 d-flex flex-column justify-content-center bg-opacity-50 p-4 rounded">
        
        <!-- বড় টাইটেল -->
        <h1 class="fw-bold display-3">Car Engine Oils</h1>
        
        <!-- paragraph নিচে আনা -->
        <p class="mt-4">
          Designed with immaculate lubricant engineering to ensure excellent performance of your vehicle.
        </p>

        <!-- ছোট ফিক্সড-উইডথ বাটন -->
        <a href="http://127.0.0.1:8000/carEngineOils" class="btn btn-light rounded-pill mt-2 px-3 py-1" style="width:120px;">
          View All
        </a>
      </div>
    </div>
  </div>
</section>






      <!-- for load more option start div -->
<div class="container py-5 car-container">
<div class="d-flex align-items-center justify-content-center mb-4">
  <div class="flex-grow-1 border-top"></div>
  <h3 class="px-3 m-0 fw-bold" style="font-size:18px;">Car engine oils</h3>
  <div class="flex-grow-1 border-top"></div>
</div>


  <div class="row g-4" id="car-product-list">
  <!-- Product cards -->
  <!-- <div class="col-6 col-sm-6 col-lg-3 product">
    <div class="card h-100 border-0">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
      <div class="card-body text-center">
        <h5 class="card-title mb-0">SAE 20W40 <br> API SLAJASo MA2</h5>
      </div>
    </div>
  </div> -->

  
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

  <!-- Hidden cards for Load More -->
  <!-- <div class="col-6 col-sm-6 col-lg-3 product d-none">
    <div class="card h-100 border-0">
      <img src="frontend/img/29512.jpg" class="card-img-top img-fluid" alt="Motorcycle Engine Oil">
      <div class="quick-view">Quick View</div>
      <div class="card-body text-center">
        <h5 class="card-title mb-0">Product 5</h5>
      </div>
    </div>
  </div> -->

  
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
  <!-- আরো cards এখানে add করুন -->
 

  <div class="text-center mt-4">
     <div class="text-center mt-4" id="loadMoreCar" >
    <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold  px-3 py-1"
        onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
        onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
        style="font-size: 0.9rem; white-space: nowrap;">
  <i class="bi bi-arrow-down-circle me-2" style="font-size: 1rem;"></i> Load More
</button>
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

// Car
setupLoadMore("loadMoreCar", "#car-product-list");
</script>





          <div class="accordion mt-4 mb-4" id="benefitsAccordion">
             <h4>Why Choose Max-One Oil</h4>
            <div class="accordion-item">
              <h2 class="accordion-header" id="b1" ><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1">Use Of Modern Technology</button></h2>
              <div id="collapseB1" class="accordion-collapse collapse show" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                  We use modern technology to process and refine products. It allows us to provide you with the right products.
               
                  <!-- <ul class="mb-0">
                    
                    <li>Helps extend engine life under severe operating conditions.</li>
                    <li>Good detergency/dispersancy for engine cleanliness.</li>
                    <li>Protects against rust and corrosion during downtime.</li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="b2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2"> Available All Over Bangladesh</button></h2>
              <div id="collapseB2" class="accordion-collapse collapse" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                  We serve entire Bangladesh to meet oil needs in every corner of the country.
                  <!-- <div class="d-flex flex-wrap gap-2">
                    <span class="badge badge-approval rounded-pill px-3 py-2">API SL/CF</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">ACEA A3/B3* (example)</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">OEM approvals – insert as needed</span>
                  </div> -->
                  <!-- <p class="small text-secondary mt-2 mb-0">*Replace/adjust specs according to your official product sheet.</p> -->
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="b3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3">Quality Oil</button></h2>
              <div id="collapseB3" class="accordion-collapse collapse" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                 Providing you with quality oil is our motto. Use our products and make your engines more efficient.
                </div>
              </div>
             </div>

              <div class="accordion-item">
              <h2 class="accordion-header" id="b2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB4">Competitive Price</button></h2>
              <div id="collapseB4" class="accordion-collapse collapse" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                 We offer competitive prices without compromising the quality of products.
                  <!-- <div class="d-flex flex-wrap gap-2">
                    <span class="badge badge-approval rounded-pill px-3 py-2">API SL/CF</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">ACEA A3/B3* (example)</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">OEM approvals – insert as needed</span>
                  </div> -->
                  <!-- <p class="small text-secondary mt-2 mb-0">*Replace/adjust specs according to your official product sheet.</p> -->
                </div>
              </div>
            </div>



             <div class="accordion-item">
              <h2 class="accordion-header" id="b2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB5">Wide Variety of Products</button></h2>
              <div id="collapseB5" class="accordion-collapse collapse" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                We have a wide range of product categories so you can meet all your oil needs.
                  <!-- <div class="d-flex flex-wrap gap-2">
                    <span class="badge badge-approval rounded-pill px-3 py-2">API SL/CF</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">ACEA A3/B3* (example)</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">OEM approvals – insert as needed</span>
                  </div> -->
                  <!-- <p class="small text-secondary mt-2 mb-0">*Replace/adjust specs according to your official product sheet.</p> -->
                </div>
              </div>
            </div>

  <div class="accordion-item">
              <h2 class="accordion-header" id="b2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB6">Smart Customer Service</button></h2>
              <div id="collapseB6" class="accordion-collapse collapse" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
               Smart customer service to meet your requirements as a fuel station.
                  <!-- <div class="d-flex flex-wrap gap-2">
                    <span class="badge badge-approval rounded-pill px-3 py-2">API SL/CF</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">ACEA A3/B3* (example)</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">OEM approvals – insert as needed</span>
                  </div> -->
                  <!-- <p class="small text-secondary mt-2 mb-0">*Replace/adjust specs according to your official product sheet.</p> -->
                </div>
              </div>
            </div>





          </div>
        </div>




  <!-- style="background: -webkit-linear-gradient(top, rgba(139, 188, 197, 0.8) 0%, rgba(255, 255, 255, 0.61) 48%, rgba(153, 153, 153, 0.41) 100%); -->


<section >
  <div class="px-4 py-4" >
    
    <div class="text-center  m-4">
      <!-- <h6 class="fw-bold">Things you should know about</h6> -->
      <h1 class="fw-bold text-dark">Who We Are</h1>
    </div>

    <div class="row g-4  mb-5">
      
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card  ">
          <div class="row g-0">
            <div class="col-3 ">
              <img src="frontend/img/max-one.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-9">
              <div class="card-body">
                <a class="text-decoration-none" href="http://127.0.0.1:8000/at_a_Glance"><h5 class="card-title text-dark">Max-One at a Glance</h5></a>
                <p class="card-text">At Max-One, we are committed to powering progress with high-quality oils and lubricants...</p>
                <a href="http://127.0.0.1:8000/at_a_Glance"><small class="text-muted">Read More...</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card  ">
          <div class="row g-0">
            <div class="col-3">
              <img src="frontend/img/leadership.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-9">
              <div class="card-body">
                <a class="text-decoration-none" href="http://127.0.0.1:8000/leadership"><h5 class="card-title text-dark">Leadership</h5></a>
                <p class="card-text">Md. Shahiduzzaman is a seasoned entrepreneur with a proven track record across multiple industries..</p>
                <a href="http://127.0.0.1:8000/leadership"><small class="text-muted">Read More...</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card  ">
          <div class="row g-0">
            <div class="col-3">
              <img src="frontend/img/ourvalues.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-9">
              <div class="card-body">
                <a class="text-decoration-none" href="http://127.0.0.1:8000/ourvalues"><h5 class="card-title text-dark">Our Values</h5></a>
                <p class="card-text">At Max-One, our values shape every decision we make and every product we deliver. They are the foundation...</p>
                <a href="http://127.0.0.1:8000/ourvalues"><small class="text-muted">Read More...</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card mb-3 ">
          <div class="row g-0">
            <div class="col-3">
              <img src="frontend/img/Diversity2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-9">
              <div class="card-body">
                <a class="text-decoration-none" href="http://127.0.0.1:8000/diversity"><h5 class="card-title text-dark">Diversity, Equity & Inclusion</h5></a>
                <p class="card-text">At Max-One, we believe that a strong and successful business is built on respect, fairness...</p>
                <a href="http://127.0.0.1:8000/diversity"><small class="text-muted">Read More...</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card mb-3 ">
          <div class="row g-0">
            <div class="col-3">
              <img src="frontend/img/OurHistory2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-9">
              <div class="card-body">
                <a class="text-decoration-none" href="http://127.0.0.1:8000/ourhistory"><h5 class="card-title text-dark">Our History</h5></a>
                <p class="card-text">The journey of Max-One is rooted in decades of entrepreneurial spirit and hard work. It began in...</p>
                <a href="http://127.0.0.1:8000/ourhistory"><small class="text-muted">Read More...</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card mb-3  ">
          <div class="row g-0">
            <div class="col-3">
              <img src="frontend/img/OurStrategy1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-9">
              <div class="card-body">
                <a class="text-decoration-none" href="http://127.0.0.1:8000/ourStrategy"><h5 class="card-title text-dark">Our Strategy</h5></a>
                <p class="card-text">BLPGL has built a state-of-the-art LPG cylinder refilling plant...</p>
                <a href="http://127.0.0.1:8000/ourStrategy"><small class="text-muted">Read More...</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- row -->
  </div>
</section>






<!-- 

<section>
  <div class="owl-carousel owl-theme">
    <div class="item"><h4>Special privilege to Bashundhara 2 months before the fall ...

Prothom Alo English
https://en.prothomalo.com › bangladesh
Oct 3, 2024 — The Bashundhara Oil and Gas Company has been given permission for importing unrefined fuel oil and storing, transporting and selling it after refining under ...</h4></div>
    <div class="item"><h4>Special privilege to Bashundhara 2 months before the fall ...

Prothom Alo English
https://en.prothomalo.com › bangladesh
Oct 3, 2024 — The Bashundhara Oil and Gas Company has been given permission for importing unrefined fuel oil and storing, transporting and selling it after refining under ...</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
  </div>
</section> -->

<!-- container div -->
<!-- </div> -->







<!-- Quick view -->
<div class="modal fade" id="quickViewProduct" tabindex="-1" aria-labelledby="quickViewLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <!-- Close button -->
      <button type="button" class="btn-close ms-auto m-2" data-bs-dismiss="modal" aria-label="Close"></button>

      <div class="modal-body p-4">
        <div class="row">

          <!-- Left Side: Product Image -->
          <div class="col-md-6 text-center">
            <div class="border rounded p-2 text-center">
              <img id="mainImage" src="frontend/img/29512.jpg" class="img-fluid rounded" alt="Product Image">
            </div>

            <!-- Thumbnails -->
            <div class="d-flex gap-2 mt-3 justify-content-center">
              <img src="frontend/img/29512.jpg" class="img-thumbnail thumb active" alt="thumb">
              <img src="frontend/img/29513.jpg" class="img-thumbnail thumb" alt="thumb">
              <img src="frontend/img/29514.jpg" class="img-thumbnail thumb" alt="thumb">
            </div>
          </div>

          <!-- Right Side: Product Details -->
          <div class="col-md-6">
            <h4 class="fw-bold">Colorful Pattern Shirt</h4>
            <p class="text-muted">SKU: FWM15VKT</p>
            <div class="mb-2">⭐⭐⭐⭐☆ (25 reviews)</div>
            <h5 class="text-primary">$120.00 
              <span class="text-decoration-line-through text-muted fs-6">$200.00</span> 
              <span class="badge bg-success ms-2">-25%</span>
            </h5>

            <p class="mt-3 text-secondary">
              A comfortable and stylish colorful shirt, perfect for casual and semi-formal occasions.
            </p>

            <!-- Quantity + Buttons -->
            <div class="d-flex align-items-center mb-3 quantity-box">
              <button class="btn btn-outline-dark btn-sm btn-decrease">-</button>
              <input type="text" value="1" class="form-control text-center mx-2" style="width:60px;">
              <button class="btn btn-outline-dark btn-sm btn-increase">+</button>
            </div>

            <div class="d-flex gap-2">
              <button class="btn btn-primary">Buy Now</button>
              <button class="btn btn-dark">Add to Cart</button>
            </div>

            <hr>

            <p class="mb-0"><strong>Category :</strong> Motorcycle engine oils</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom CSS -->
<style>
  .thumb {
    width: 80px;
    height: 80px;
    cursor: pointer;
    opacity: 0.6;
    transition: 0.3s;
  }
  .thumb.active {
    opacity: 1;
    border: 2px solid #0d6efd;
  }
</style>

<!-- JS -->
<script>
  // Thumbnail image switch
  document.querySelectorAll('.thumb').forEach(img => {
    img.addEventListener('click', function () {
      document.getElementById('mainImage').src = this.src;
      document.querySelectorAll('.thumb').forEach(i => i.classList.remove('active'));
      this.classList.add('active');
    });
  });

  // Generic Quantity Controls for multiple boxes
  function setupQuantityControls(containerSelector) {
    const containers = document.querySelectorAll(containerSelector);

    containers.forEach(container => {
      const input = container.querySelector('input[type="text"]');
      const btnIncrease = container.querySelector('.btn-increase');
      const btnDecrease = container.querySelector('.btn-decrease');

      btnIncrease.addEventListener('click', () => {
        let currentVal = parseInt(input.value) || 1;
        input.value = currentVal + 1;
      });

      btnDecrease.addEventListener('click', () => {
        let currentVal = parseInt(input.value) || 1;
        if (currentVal > 1) input.value = currentVal - 1;
      });
    });
  }

  // Initialize quantity controls
  setupQuantityControls('.quantity-box');
</script>






 


@endsection
