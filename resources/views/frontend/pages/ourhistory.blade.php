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
          <h2 class="fw-bold display-5 mb-3">Our History</h2>
            <p class="text-muted">The journey of <strong>Max-One</strong> spans decades of resilience, vision, and growth — evolving from a humble tailoring shop to a trusted leader in multiple industries.</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a href="/" class="text-warning text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item text-white active" aria-current="page">Our History</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>












<div class="container mt-5 mb-5">
    <!-- <h1 class="text-center text-primary fw-bold mb-4">Our History</h1>
    <p class="lead text-center mb-5">
        The journey of <strong>Max-One</strong> spans decades of resilience, vision, and growth — evolving from a humble tailoring shop to a trusted leader in multiple industries.
    </p> -->

    <div class="timeline">
        
        <div class="timeline-container left">
            <div class="content">
                <h5 class="fw-bold text-success">1971 – Tailoring</h5>
                <p>Started a tailoring business before the Liberation War, laying the foundation of trust and craftsmanship.</p>
            </div>
        </div>

        <div class="timeline-container right">
            <div class="content">
                <h5 class="fw-bold text-warning">2008 – Decorator</h5>
                <p>Entered the decorator business, bringing creativity and elegance to events.</p>
            </div>
        </div>

        <div class="timeline-container left">
            <div class="content">
                <h5 class="fw-bold text-info">2009 – Grocery</h5>
                <p>Expanded into the grocery sector, serving essential products to the community.</p>
            </div>
        </div>

        <div class="timeline-container right">
            <div class="content">
                <h5 class="fw-bold text-primary">2013 – Mobile Banking & Hardware</h5>
                <p>Adapted to modern needs by offering mobile banking and hardware solutions.</p>
            </div>
        </div>

        <div class="timeline-container left">
            <div class="content">
                <h5 class="fw-bold text-danger">2017 – Construction</h5>
                <p>Ventured into construction, working on buildings, roads, and highways.</p>
            </div>
        </div>

        <div class="timeline-container right">
            <div class="content">
                <h5 class="fw-bold text-dark">Today – Oil & Lubricants</h5>
                <p>Authorized dealer for Maxx-en Company, delivering high-quality oils and lubricants.</p>
            </div>
        </div>

    </div>
</div>

<style>
/* Timeline Base */
.timeline {
    position: relative;
    max-width: 900px;
    margin: auto;
}
.timeline::after {
    content: '';
    position: absolute;
    width: 4px;
    background-color: #8bbcc5;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -2px;
}

/* Timeline Containers */
.timeline-container {
    padding: 15px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}
.timeline-container.left { left: 0; }
.timeline-container.right { left: 50%; }

/* Timeline Circles */
.timeline-container::after {
    content: '';
    position: absolute;
    width: 18px;
    height: 18px;
    right: -9px;
    background-color: white;
    border: 3px solid #8bbcc5;
    top: 20px;
    border-radius: 50%;
    z-index: 1;
}
.timeline-container.right::after {
    left: -9px;
}

/* Content Box */
.content {
    padding: 20px;
    background-color: #f9f9f9;
    position: relative;
    border-radius: 6px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* Responsive */
@media screen and (max-width: 768px) {
    .timeline::after {
        left: 20px; /* Center line to left */
    }
    .timeline-container {
        width: 100%;
        padding-left: 50px; /* Space for the line & circle */
        padding-right: 20px;
    }
    .timeline-container.right {
        left: 0;
    }
    .timeline-container::after {
        left: 11px; /* Circle position */
        right: auto;
    }
}
</style>


@endsection