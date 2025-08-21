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
          <h2 class="fw-bold display-5 mb-3">Max-One at a Glance</h2>
            <p class="text-muted">Delivering high-quality oil & lubricant solutions in Bangladesh since 2025</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a href="/" class="text-warning  text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item text-white active" aria-current="page">Max-One at a Glance</li>
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









<!-- Max-One at a Glance Section -->
<section class="py-5" style="background-color: #eef2f7;">
  <div class="container">

    <!-- Section Title -->
    <!-- <div class="text-center mb-5">
      <h2 class="fw-bold text-primary">Max-One at a Glance</h2>
      <p class="text-muted">Delivering high-quality oil & lubricant solutions in Bangladesh since 2025</p>
    </div> -->

    <!-- Content Row -->
    <div class="row g-4 align-items-center">

      <!-- Image Column -->
      <div class="col-md-5">
        <div class="card border-0 shadow">
          <img src="frontend/img/One at a Glance.jpg" class="card-img-top rounded" alt="Max-One at a Glance">
        </div>
      </div>

      <!-- Text Column -->
      <div class="col-md-7">
        <p>
          Established in August 2025, <strong>Max-One</strong> is a trusted name in the oil and lubricant industry of Bangladesh. We specialize in automotive lubricants, industrial oils, greases, and specialty lubricants.
        </p>
        <p>
          Our mission is simple: provide top-quality lubrication solutions that customers can rely on. Guided by our vision to be the most trusted brand in the industry, we operate with core values that define who we are.
        </p>

        <!-- Core Values Cards -->
        <div class="row g-3 mt-4">
          <div class="col-6 col-md-6">
            <div class="card border-0 shadow-sm p-3 text-center h-100">
              <h5 class="text-primary mb-2">Quality</h5>
              <p class="small text-muted mb-0">Ensuring superior products for long-lasting performance.</p>
            </div>
          </div>
          <div class="col-6 col-md-6">
            <div class="card border-0 shadow-sm p-3 text-center h-100">
              <h5 class="text-primary mb-2">Reliability</h5>
              <p class="small text-muted mb-0">Dependable solutions to keep your operations smooth.</p>
            </div>
          </div>
          <div class="col-6 col-md-6">
            <div class="card border-0 shadow-sm p-3 text-center h-100">
              <h5 class="text-primary mb-2">Customer Focus</h5>
              <p class="small text-muted mb-0">Understanding needs and delivering tailored solutions.</p>
            </div>
          </div>
          <div class="col-6 col-md-6">
            <div class="card border-0 shadow-sm p-3 text-center h-100">
              <h5 class="text-primary mb-2">Innovation</h5>
              <p class="small text-muted mb-0">Constantly improving products and services for excellence.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


@endsection