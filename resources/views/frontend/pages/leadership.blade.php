@extends('frontend.master')
@section('content')

<style> :root {
            --primary: #0a3d62;
            --secondary: #1e90ff;
            --accent: #f39c12;
            --light: #f5f6fa;
            --dark: #2c3e50;
        }
        .section-title1 {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 0.5rem;
        }
        
        .section-title1::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }
            .industry-item {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            background: white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 3px solid var(--secondary);
        }
        
        .industry-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-left: 3px solid var(--accent);
        }
            .quote-section {
            background: linear-gradient(rgba(10, 61, 98, 0.9), rgba(10, 61, 98, 0.9)), url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-attachment: fixed;
            color: white;
            padding: 5rem 0;
            position: relative;
        }
        
        .quote-icon {
            font-size: 4rem;
            opacity: 0.2;
            position: absolute;
            top: 20px;
            left: 20px;
        }


.timeline1 {
    position: relative;
    padding: 20px 0;
    display: flex;
    flex-direction: column;
    
}

.timeline1::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 4px;
    background: var(--secondary);
    left: 50%;
    margin-left: -2px;
}

.timeline-item1 {
    display: flex;
    justify-content: flex-start;
    position: relative;
    width: 100%;
}

.timeline-badge1 {
    position: absolute;
    left: 50%;
    top: 20px;
    width: 20px;
    height: 20px;
    margin-left: -10px;
    background-color: var(--accent);
    border-radius: 50%;
    z-index: 1;
}

.timeline-content1 {
    width: 45%;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.timeline-item1:nth-child(odd) {
    flex-direction: row-reverse;
}

.timeline-item1:nth-child(odd) .timeline-content1 {
    text-align: left;
}

.timeline-item1:nth-child(even) .timeline-content1 {
    text-align: left;
}
        
        .progress-bar-custom {
            background-color: var(--secondary);
        }
          @media (max-width: 576px) {
    .col-md-5 img {
      max-width: 150px;
    }

    @media (max-width: 768px) {
    .timeline1::before {
        left: 10px;
    }
    .timeline-badge1 {
        left: 10px;
        margin-left: 0;
    }
    .timeline-content1 {
        width: calc(100% - 40px);
        margin-left: 40px;
    }
    .timeline-item1,
    .timeline-item1:nth-child(odd) {
        flex-direction: row;
    }
}
  }
        </style>
<div class="container py-5"> 
    <div class="row align-items-center">
         <!-- Left Side: Profile Image -->
          
         <div class="col-md-5 text-center mb-4 mb-md-0">
            <img src="frontend/img/My_Photo.jpg" class="border img-fluid shadow" alt="Md. Shahiduzzaman" style="max-width: 400px; width: 100%;"> </div>
             <!-- Right Side: Info --> <div class="col-md-7"> <h1 class="fw-bold mb-2">Md. Shahiduzzaman</h1> 
              <h4 class="text-muted fw-light mb-4">Founder & Chairman, Max-One</h4> 
              <!-- Badges -->
                <div class="d-flex flex-wrap gap-2 mb-3"> 
                    <span class="badge bg-primary text-white fs-6 py-1 px-2 shadow-sm">Entrepreneur</span> 
                    <span class="badge bg-success text-white fs-6 py-1 px-2 shadow-sm">Business Leader</span> 
                    <span class="badge bg-info text-dark fs-6 py-1 px-2 shadow-sm">JCI Member</span> </div>
                    
                    <!-- Description -->
                      <p class="text-secondary fs-6"> Md. Shahiduzzaman is a seasoned entrepreneur with a proven track record across multiple industries. Known for his integrity, innovation, and results-driven approach, he has successfully built and grown businesses over decades. </p>
                     </div> </div>


                <div class="mt-5">
                      <h2 class="section-title1 mb-5">Professional Profile</h2>
                        <p class="lead">
                            Md. Shahiduzzaman is a seasoned entrepreneur with a proven track record across multiple industries. Having completed his Bachelor of Commerce (B.Com), he ventured into diverse business sectors and built a reputation for integrity, innovation, and results.
                        </p>
                        <p>
                              With over two decades of experience in business leadership, he has successfully navigated various market challenges and built sustainable enterprises that create value for stakeholders and communities alike.
                        </p>
                </div>


  <div class="mb-5">
                        <h2 class="section-title1">Business Expertise</h2>
                        <p class="mb-4">Over the years, he has successfully managed and grown businesses in:</p>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="industry-item">
                                    <i class="fas fa-bolt me-2 text-primary"></i> Electric Hardware
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="industry-item">
                                    <i class="fas fa-calendar-alt me-2 text-primary"></i> Event & Decor Services
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="industry-item">
                                    <i class="fas fa-plane me-2 text-primary"></i> Air Base Travels
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="industry-item">
                                    <i class="fas fa-mobile-alt me-2 text-primary"></i> Mobile Banking Services
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="industry-item">
                                    <i class="fas fa-tshirt me-2 text-primary"></i> Tailoring & Garments
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="industry-item">
                                    <i class="fas fa-hard-hat me-2 text-primary"></i> Construction – Building, Roads & Highways
                                </div>
                            </div>
                        </div>
                    </div>


<section>
  <h2 class="section-title1 text-center mb-5">Career Milestones</h2>
  <div class="timeline1">
    <div class="timeline-item1">
      <div class="timeline-badge1"></div>
      <div class="timeline-content1">
        <h5>1998</h5>
        <p class="text-primary">Bachelor of Commerce</p>
        <p>Completed B.Com degree and began entrepreneurial journey</p>
      </div>
    </div>
    <div class="timeline-item1">
      <div class="timeline-badge1"></div>
      <div class="timeline-content1">
        <h5>2003</h5>
        <p class="text-primary">Established Electric Hardware Business</p>
        <p>First major venture in the manufacturing sector</p>
      </div>
    </div>
    <div class="timeline-item1">
      <div class="timeline-badge1"></div>
      <div class="timeline-content1">
        <h5>2008</h5>
        <p class="text-primary">Founded Air Base Travels</p>
        <p>Expanded into travel and tourism industry</p>
      </div>
    </div>
    <div class="timeline-item1">
      <div class="timeline-badge1"></div>
      <div class="timeline-content1">
        <h5>2014</h5>
        <p class="text-primary">Launched Mobile Banking Services</p>
        <p>Pioneered fintech solutions in Bangladesh</p>
      </div>
    </div>
    <div class="timeline-item1">
      <div class="timeline-badge1"></div>
      <div class="timeline-content1">
        <h5>2018</h5>
        <p class="text-primary">Established Max-One</p>
        <p>Founded oil and lubricant company with a vision for quality</p>
      </div>
    </div>
    <div class="timeline-item1">
      <div class="timeline-badge1"></div>
      <div class="timeline-content1">
        <h5>2023</h5>
        <p class="text-primary">Industry Leadership Recognition</p>
        <p>Awarded for outstanding contribution to Bangladesh's business sector</p>
      </div>
    </div>
  </div>
</section>

</div>


<section class="quote-section">
        <div class="row justify-content-center">
                <div class="col-lg-8 text-center position-relative">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <blockquote class="blockquote">
                        <p class="fs-2 fst-italic mb-4">
                            "True leadership is about creating opportunities for others to succeed while building sustainable businesses that contribute to national development."
                        </p>
                        <span class=" text-white mt-4">--Md. Shahiduzzaman</span>
                    </blockquote>
                </div>
            </div> 
    </section>

 @endsection 