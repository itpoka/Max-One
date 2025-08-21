@extends('frontend.master')
@section('content')
<style>.section-title1 {
  position: relative;
  margin-bottom: 2rem;
  padding-bottom: 0.5rem;
}

.section-title1::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 4px;
  background: var(--secondary);
  border-radius: 2px;
}

.icon-box {
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}

.hover-card {
  transition: all 0.3s ease;
}
.hover-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}
</style>






<section class="page-title position-relative text-center text-white" 
         style="background: url('https://lub-rref.com/wp-content/uploads/2018/11/page-title.jpg') no-repeat center center/cover; padding: 120px 0;">
  
  <!-- Optional overlay for better text readability -->
  <div class="overlay position-absolute top-0 start-0 w-100 h-100" 
       style="background-color: rgba(0, 0, 0, 0.5);"></div>

  <div class="container position-relative" style="z-index: 2;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="title-breadcrumb">
          <h2 class="fw-bold display-5 mb-3">Our Values</h2>
            <p class="text-muted"> At Max-One, our values shape every decision we make and every product we deliver. 
      They are the foundation of our commitment to excellence and long-term partnerships.</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a href="/" class="text-warning text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item text-white active" aria-current="page">Our Values</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>



















<section class="py-5" style="background: #f8f9fa;">
  <div class="container">
    <!-- <h1 class="section-title1 text-center mb-5">Our Values</h1>
    <p class="lead text-center mb-5">
      At Max-One, our values shape every decision we make and every product we deliver. 
      They are the foundation of our commitment to excellence and long-term partnerships.
    </p> -->

    <div class="row g-4">
      <!-- Value 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 text-center p-4 hover-card">
          <div class="icon-box bg-primary text-white mb-3 mx-auto">
            <i class="fas fa-star fa-2x"></i>
          </div>
          <h5 class="fw-bold">Quality</h5>
          <p class="text-muted">
            We ensure every drop of our oil and lubricant meets the highest standards for performance and reliability.
          </p>
        </div>
      </div>

      <!-- Value 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 text-center p-4 hover-card">
          <div class="icon-box bg-success text-white mb-3 mx-auto">
            <i class="fas fa-handshake fa-2x"></i>
          </div>
          <h5 class="fw-bold">Reliability</h5>
          <p class="text-muted">
            Customers can count on us for consistent supply, dependable products, and trustworthy service.
          </p>
        </div>
      </div>

      <!-- Value 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 text-center p-4 hover-card">
          <div class="icon-box bg-info text-white mb-3 mx-auto">
            <i class="fas fa-users fa-2x"></i>
          </div>
          <h5 class="fw-bold">Customer Focus</h5>
          <p class="text-muted">
            We listen, understand, and tailor our solutions to meet the unique needs of each client.
          </p>
        </div>
      </div>

      <!-- Value 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 text-center p-4 hover-card">
          <div class="icon-box bg-warning text-white mb-3 mx-auto">
            <i class="fas fa-lightbulb fa-2x"></i>
          </div>
          <h5 class="fw-bold">Innovation</h5>
          <p class="text-muted">
            We embrace new technologies and ideas to deliver better, more efficient lubrication solutions.
          </p>
        </div>
      </div>
    </div>

    <p class="mt-5 text-center fw-semibold text-secondary">
      These values are not just words — they are the driving force behind Max-One’s growth and the reason customers choose us with confidence.
    </p>
  </div>
</section>



@endsection