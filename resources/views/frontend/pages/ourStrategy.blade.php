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
          <h2 class="fw-bold display-5 mb-3">Our Strategy</h2>
            <p class="text-muted">  At Max-One, our strategy is built on a simple principle — deliver value through quality, reliability, and innovation. </p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a href="/" class="text-warning text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item text-white active" aria-current="page">Our Strategy</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
























<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <!-- Heading -->
    <div class="text-center mb-5">
      <!-- <h2 class="fw-bold" style="color:#003366;">Our Strategy</h2>
      <p class="text-muted mx-auto" style="max-width: 700px;">
        At Max-One, our strategy is built on a simple principle — deliver value through quality, reliability, and innovation. 
        We aim to be more than just a supplier of oil and lubricants; we strive to be a trusted partner in our customers’ success.
      </p> -->
    </div>

    <!-- Key Pillars -->
    <div class="row g-4">
      
      <!-- Pillar 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-users fa-3x mb-3 text-primary"></i>
            <h5 class="card-title fw-bold">Customer-Centric Approach</h5>
            <p class="card-text text-muted">
              Understand customer needs, provide tailored solutions, and build lasting relationships.
            </p>
          </div>
        </div>
      </div>

      <!-- Pillar 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-award fa-3x mb-3 text-success"></i>
            <h5 class="card-title fw-bold">Quality Excellence</h5>
            <p class="card-text text-muted">
              Source and supply only the finest oils and lubricants, ensuring superior performance and long-term equipment protection.
            </p>
          </div>
        </div>
      </div>

      <!-- Pillar 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-chart-line fa-3x mb-3 text-warning"></i>
            <h5 class="card-title fw-bold">Market Growth</h5>
            <p class="card-text text-muted">
              Expand our reach across Bangladesh, targeting both urban and rural markets with efficient distribution channels.
            </p>
          </div>
        </div>
      </div>

      <!-- Pillar 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-lightbulb fa-3x mb-3 text-danger"></i>
            <h5 class="card-title fw-bold">Innovation & Adaptation</h5>
            <p class="card-text text-muted">
              Embrace new technologies, product improvements, and sustainable practices to stay ahead in a competitive industry.
            </p>
          </div>
        </div>
      </div>

      <!-- Pillar 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center">
            <i class="fas fa-user-graduate fa-3x mb-3 text-info"></i>
            <h5 class="card-title fw-bold">Team Empowerment</h5>
            <p class="card-text text-muted">
              Invest in training and development to ensure our team is knowledgeable, motivated, and capable of delivering exceptional service.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Closing Statement -->
    <div class="text-center mt-5">
      <p class="fw-bold text-secondary" style="max-width: 750px; margin:auto;">
        Through these strategies, Max-One is positioning itself as a leading name in the oil and lubricant sector, 
        committed to sustainable growth and customer satisfaction.
      </p>
    </div>
  </div>
</section>
@endsection