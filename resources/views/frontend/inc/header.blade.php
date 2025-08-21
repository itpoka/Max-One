<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
 
</head>
<body>
  
      <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="contact-info">
                <span><i class="fas fa-phone"></i> 01721917774</span>
          
          
                <a href="https://maps.app.goo.gl/74u5r6aDwAKBN2897" target="_blank" style="text-decoration:none; color:inherit;">
    <span><i class="fas fa-map-marker-alt"></i> Jashore, Bangladesh</span>
</a>

            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/Md.MustafizurRahman.Rony.6"  target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                 <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>  
 

    


<style>
    /* Offcanvas transparent background */
    .offcanvas {
      background: rgba(255, 255, 255, 0.95); /* white with little transparent */
      backdrop-filter: blur(6px);
      width:300px;
    }

 .navbar .dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 0;}

  .dropdown-item:hover {
    color:#fff;
    background-color:  #1e2125; 
        border-radius: 10px;
    margin: 0 0px;
    padding-left: 10px;
    padding-right: 5px;
}

.navbar-nav .nav-link:hover 
 { color:#fff;
    background-color:  #1e2125; 
    border-radius: 5px;
    transition: 0.3s;
}

.badge { 
    padding: .35em 0.50em;
    font-size: .40em; 
}

.btn .badge { 
    top: 4px;
    left: 28px;
}


 #mobileMenu .dropdown-menu {
    position: static !important; /* normally dropdown-menu position absolute thake, eita static korle niche shift hobe */
    float: none;
    width: 100%;
    margin: 0; 
    border: none;
    box-shadow: none;
  }

  /* Dropdown toggle arrow thik rakha */
  #mobileMenu .dropdown-toggle::after {
    float: right;
    margin-left: auto;
  }
  </style>
 

<!-- 🌐 Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient" style="  box-shadow: 0 14px 28px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.1)!important;">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- Left: Menu Toggler -->
    <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Middle: Logo -->
    <a class="navbar-brand mx-auto d-lg-none" href="http://127.0.0.1:8000">
      <img src="{{ asset('frontend/img/max-one-logo.png') }}" width="50" height="50" alt="Logo">
    </a>

    <!-- Right: Search + Cart -->
    <div class="d-flex align-items-center d-lg-none">
      <button class="btn btn-warning me-2" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
        <i class="bi bi-search"></i>
      </button>
      <a href="http://127.0.0.1:8000/openCard" class="btn btn-outline-secondary">
        <i class="bi bi-cart"></i>
      </a>
    </div>

    <!-- Desktop Logo -->
    <a class="navbar-brand d-none d-lg-block" href="http://127.0.0.1:8000">
      <img src="{{ asset('frontend/img/max-one-logo.png') }}" width="70" height="70" alt="Logo">
    </a>

    <!-- Desktop Menu -->
    <div class="d-none d-lg-flex flex-grow-1 justify-content-between align-items-center">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item fw-bold"><a class="nav-link active" href="http://127.0.0.1:8000">Home</a></li>
        <li class="nav-item dropdown fw-bold">
          <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" data-bs-toggle="dropdown">Who We Are</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/at_a_Glance">Max-One at a Glance</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/leadership">Leadership</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/ourvalues">Our Values</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/diversity">Diversity & Inclusion</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/ourhistory">Our History</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/ourStrategy">Our Strategy</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown fw-bold">
          <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" data-bs-toggle="dropdown">Products</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/at_a_Glance">Motorcycle</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/at_a_Glance">Passenger Car</a></li>
             <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/at_a_Glance">Three Wheeler</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/at_a_Glance">Light Duty</a></li>
            <li><a class="dropdown-item border-bottom" href="http://127.0.0.1:8000/at_a_Glance">Heavy Duty</a></li>
          </ul>
        </li>
        <li class="nav-item fw-bold"><a class="nav-link" href="http://127.0.0.1:8000/contact">Contact</a></li>
        <li class="nav-item fw-bold"><a class="nav-link" href="http://127.0.0.1:8000/about">About Us</a></li>
      </ul>

      <!-- Desktop Search -->
      <form class="d-flex">
        <div class="input-group">
          <input class="form-control  form-control-sm" type="search" placeholder="Search">
          <button class="btn btn-warning" type="submit"><i class="bi bi-search custom-sm"></i></button>
      
          <a href="http://127.0.0.1:8000/openCard" class="btn btn-link position-relative text-dark fw-bold text-decoration-none d-flex align-items-center gap-2 ms-4">
            
            <!-- Price -->
            <span class="cart-price">
              <bdi>2,540<span class="fs-6">৳</span></bdi>
            </span>

            <!-- Cart Icon with badge -->
            <i class="bi bi-cart fs-4 position-relative">
              <span class="position-absolute top-3 start-200 translate-middle badge rounded-pill bg-danger">
                2
                <span class="visually-hidden">unread messages</span>
              </span>
            </i>
          </a>
        </div>
      </form>
    </div>
  </div>
</nav>

<!-- 📱 Offcanvas Menu (mobile) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body p-0">
    <form class="d-flex p-3 border-bottom">
      <div class="input-group">
        <input class="form-control" type="search" placeholder="Search">
        <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i></button>
      </div>
    </form>

    <ul class="list-unstyled m-0 p-0">
      <li class="border-bottom">
        <a href="http://127.0.0.1:8000" class="d-block py-3 px-3 text-decoration-none text-dark">Home</a>
      </li>

      <li class="border-bottom">
        <a class="d-block py-3 px-3 text-dark text-decoration-none dropdown-toggle" data-bs-toggle="collapse" href="#whoWeAre" role="button" aria-expanded="false" aria-controls="whoWeAre">
          Who We Are
        </a>
        <div class="collapse border-top" id="whoWeAre">
          <ul class="list-unstyled ms-3">
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="http://127.0.0.1:8000/at_a_Glance">Max-One at a Glance</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="http://127.0.0.1:8000/leadership">Leadership</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="http://127.0.0.1:8000/ourvalues">Our Values</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom"  href="http://127.0.0.1:8000/diversity">Diversity & Inclusion</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="http://127.0.0.1:8000/ourhistory">Our History</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted  " href="http://127.0.0.1:8000/ourStrategy">Our Strategy</a></li>
          </ul>
        </div>
      </li>

      <li class="border-bottom">
        <a class="d-block py-3 px-3 text-dark text-decoration-none dropdown-toggle" data-bs-toggle="collapse" href="#products" role="button" aria-expanded="false" aria-controls="products">
          Products
        </a>
        <div class="collapse border-top" id="products">
          <ul class="list-unstyled ms-3">
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="#">Passenger Car</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="#">Motorcycle</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="#">Three Wheeler</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted border-bottom" href="#">Light Duty</a></li>
            <li><a class="d-block py-2 px-3 text-decoration-none text-muted " href="#">Heavy Duty</a></li>
          </ul>
        </div>
      </li>

      <li class="border-bottom">
        <a href="http://127.0.0.1:8000/contact" class="d-block py-3 px-3 text-decoration-none text-dark">Contact</a>
      </li>

      <li class="border-bottom">
        <a href="http://127.0.0.1:8000/about" class="d-block py-3 px-3 text-decoration-none text-dark">About Us</a>
      </li>
    </ul>
  </div>
</div>

<!-- 🔍 Mobile Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3">
      <form class="d-flex">
        <input type="text" class="form-control me-2" placeholder="Search Here">
        <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</div>
