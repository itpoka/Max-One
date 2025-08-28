@extends('frontend.master')
@section('content')



<section class="page-title position-relative text-center text-white" 
         style="background: url('https://lub-rref.com/wp-content/uploads/2018/11/page-title.jpg') no-repeat center center/cover; padding: 120px 0;">
  
  <!-- Optional overlay for better text readability -->
  <div class="overlay position-absolute top-0 start-0 w-100 h-100" 
       style="background-color: rgba(0, 0, 0, 0.5);"></div>

  <div class="container position-relative" style="z-index: 2;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="title-breadcrumb">
          <h2 class="fw-bold display-5 mb-3">List Of Distributor</h2>
            <p class="text-muted">আপনার পছন্দের সব পণ্য নীচের ডিসট্রিবিউটরদের কাছ থেকে সহজেই সংগ্রহ করুন। ডিসট্রিবিউটরদের বিভাগ, জেলা বা এলাকার ভিত্তিতে ফিল্টার করে দ্রুত খুঁজে নিন।</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a href="/" class="text-warning  text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item text-white active" aria-current="page">List Of Distributor</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Optional CSS -->
<style>
.page-title .breadcrumb-item + .breadcrumb-item::before {
    content: ">";
    color: #fff;
    margin: 0 0.5rem;
}
.page-title h2 {
    text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
}
.overlay {
    transition: all 0.3s ease;
}
</style>









   <style>
    .location-icon {
      transition: background-color 0.3s, color 0.3s;
      cursor: pointer;
    }
    .location-icon:hover {
      background-color: #ffc107 !important;
      color: #000 !important;
    }
  </style>


<div class="container py-4">
  
  <!-- Filters -->
  <div class="row mb-4 g-3">
    <div class="col-md-4">
      <label class="form-label">Divisions</label>
      <select class="form-select border-0 border-bottom border-dark rounded-0 shadow-none">
        <option selected>Choose Division</option>
        <option>Dhaka</option>
        <option>Chittagong</option>
      </select>
    </div>
    <div class="col-md-4">
      <label class="form-label">District</label>
      <select class="form-select border-0 border-bottom border-dark rounded-0 shadow-none">
        <option selected>Choose City</option>
        <option>Dhaka</option>
        <option>Gazipur</option>
      </select>
    </div>
    <div class="col-md-4">
      <label class="form-label">Area</label>
      <select class="form-select border-0 border-bottom border-dark rounded-0 shadow-none">
        <option selected>Choose Area</option>
        <option>Mirpur</option>
        <option>Shyamoli</option>
      </select>
    </div>
  </div>

  <!-- Cards -->
  <div class="row g-4" id="dealer-product-list">
    <!-- Example Products -->
   <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">Siam Auto Solution</h6>
        <p class="mb-2">295/G, Rayerbazar</p>
        <p class="mb-0">01937775522</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">Bepari Lube House</h6>
        <p class="mb-2">78/5 Kuril, Dhaka</p>
        <p class="mb-0">01866000065</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">Mayer Doa Motor Works</h6>
        <p class="mb-2">Rayer Bazer Baroi Khali, Sutangong</p>
        <p class="mb-0">01915018741</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

      <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 2</h6>
        <p class="mb-2">Some address 2</p>
        <p class="mb-0">01710000002</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 2</h6>
        <p class="mb-2">Some address 2</p>
        <p class="mb-0">01710000002</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>


    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 2</h6>
        <p class="mb-2">Some address 2</p>
        <p class="mb-0">01710000002</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>


    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 2</h6>
        <p class="mb-2">Some address 2</p>
        <p class="mb-0">01710000002</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

     

    <!-- Hidden Products for Load More -->
    <div class="col-md-4 product d-none">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

    <div class="col-md-4 product d-none">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 2</h6>
        <p class="mb-2">Some address 2</p>
        <p class="mb-0">01710000002</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

       <div class="col-md-4 product d-none">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

       <div class="col-md-4 product d-none">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>



       <div class="col-md-4 product d-none">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>



       <div class="col-md-4 product d-none">
      <div class="card bg-light border-0 p-4 position-relative h-100">
        <h6 class="text-danger fw-semibold mb-1">New Dealer 1</h6>
        <p class="mb-2">Some address 1</p>
        <p class="mb-0">01710000001</p>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark text-white rounded-circle p-2 fs-5 location-icon me-4"
             onclick="window.open('https://www.google.com/maps?q=23.742556,90.360444','_blank')">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
      </div>
    </div>

  </div>

  <!-- Load More Button -->
  <div class="text-center mt-4" id="loadMoreMotor">
    <button class="btn btn-dark btn-md mt-4 mb-4 fw-bold px-3 py-1"
        onmouseover="this.classList.replace('btn-dark','btn-warning'); this.classList.add('text-dark');"
        onmouseout="this.classList.replace('btn-warning','btn-dark'); this.classList.remove('text-dark');"
        style="font-size: 0.9rem; white-space: nowrap;">
      <i class="bi bi-arrow-down-circle me-2" style="font-size: 1rem;"></i> Load More
    </button>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function setupLoadMore(buttonId, containerSelector) {
  const loadMoreBtn = document.getElementById(buttonId).querySelector('button');
  const hiddenProducts = document.querySelectorAll(containerSelector + ' .product.d-none');
  const totalProducts = document.querySelectorAll(containerSelector + ' .product').length;

  // Show button only if total products > 3
  if (totalProducts <= 3) {
    loadMoreBtn.style.display = 'none';
  }

  let currentIndex = 0;
  const step = 3;

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

setupLoadMore("loadMoreMotor", "#dealer-product-list");
</script>


@endsection