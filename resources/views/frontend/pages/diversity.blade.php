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
          <h2 class="fw-bold display-5 mb-3">Diversity, Equity & Inclusion</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item">
                <a href="/" class="text-warning  text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item text-white active" aria-current="page">Diversity, Equity & Inclusion</li>
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


<div class="container">
    <div class="p-5 rounded shadow-sm" style="background: linear-gradient(135deg, #f9f9f9, #ffffff); border-left: 1px solid #8bbcc5;">
        
        <!-- <h1 class="mb-4 text-primary fw-bold">Diversity, Equity & Inclusion</h1> -->
        
        <p class="lead">
            At <strong>Max-One</strong>, we believe that a strong and successful business is built on respect, fairness, and equal opportunity. 
            We are committed to creating a workplace and business environment where everyone — regardless of background, gender, ethnicity, or belief — 
            feels valued and empowered.
        </p>
        
        <hr class="my-4">

        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 border rounded h-100 text-center bg-light shadow-sm">
                    <h4 class="text-success fw-bold mb-3">Diversity</h4>
                    <p class="mb-0">We welcome people from different walks of life, recognizing that varied experiences and perspectives drive creativity and innovation.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="p-4 border rounded h-100 text-center bg-light shadow-sm">
                    <h4 class="text-warning fw-bold mb-3">Equity</h4>
                    <p class="mb-0">We ensure fair access to opportunities, resources, and growth for all, removing barriers that may hold anyone back.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="p-4 border rounded h-100 text-center bg-light shadow-sm">
                    <h4 class="text-info fw-bold mb-3">Inclusion</h4>
                    <p class="mb-0">We foster a culture where every voice is heard, and every individual feels a sense of belonging and contribution.</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <p class="mb-0"><em>Through our commitment to Diversity, Equity & Inclusion, we not only strengthen our company but also contribute to a more respectful and collaborative society.</em></p>
        </div>
    </div>
</div>



@endsection