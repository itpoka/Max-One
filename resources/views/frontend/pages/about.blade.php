 @extends('frontend.master')
@section('content')

 
  <style>
    :root{
      --bp-green:#009639; /* bp brand green vibe */
      --bp-dark:#003D2B;
      --bp-light:#F3FFF8;
      --bp-gold:#FFC845;
    }
    body{background:#fff;}
    .hero{position:relative;background:linear-gradient(180deg, rgba(0,150,57,.85), rgba(0,150,57,.55)), url('https://images.unsplash.com/photo-1563720223185-11003d516935?q=80&w=1600&auto=format&fit=crop'); background-size:cover;background-position:center;color:#fff;}
    .hero .container{padding-top:5rem;padding-bottom:5rem;}
    .crumbs a{color:#0d6efd;text-decoration:none}
    .badge-approval{background:var(--bp-light); color:var(--bp-dark); border:1px solid #d5efe2;}
    .spec-pill{border:1px solid #dfe8e2; background:#fff;}
    .section-title{font-weight:700;}
    .shadow-soft{box-shadow:0 8px 24px rgba(0,0,0,.06);}    
    .ksp i{font-size:1.5rem;color:var(--bp-green)}
    .download-card{border:1px dashed #cde7da}
    .cta{background:var(--bp-light)}
    .sticky-buy{position:sticky; top:1rem}
    .logo-bp{width:56px; height:56px; border-radius:50%; background:var(--bp-green); display:inline-flex; align-items:center; justify-content:center; color:#fff; font-weight:700}
  </style>
 

   

  <!-- Hero / Title -->
  <header class="hero">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7 text-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <span class="logo-bp">bp</span>
            <span class="text-uppercase fw-semibold letter-spacing-1">Engine Oil</span>
          </div>
          <h1 class="display-5 fw-bold mb-3">Super V 20W‑50</h1>
          <p class="lead mb-4">Premium mineral multigrade engine oil engineered to protect commercial vehicle engines in demanding conditions.</p>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge bg-warning text-dark">SAE 20W‑50</span>
            <span class="badge bg-light text-dark">API SL/CF</span>
            <span class="badge bg-light text-dark">High‑temperature protection</span>
            <span class="badge bg-light text-dark">Suitable for mixed fleets</span>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card border-0 shadow-soft sticky-buy">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1615658504238-4f31f64f6f74?q=80&w=900&auto=format&fit=crop" alt="bp Super V 20W-50 packshot" />
              </div>
              <div class="d-grid gap-2">
                <a class="btn btn-success" href="#where-to-buy"><i class="bi bi-bag me-2"></i>Where to buy</a>
                <a class="btn btn-outline-success" href="#downloads"><i class="bi bi-file-earmark-arrow-down me-2"></i>Product datasheet</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Key Specs / Highlights -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-8">
          <h2 class="section-title h3 mb-3">Why choose Super V 20W‑50</h2>
          <div class="row row-cols-1 row-cols-md-2 g-3 ksp">
            <div class="col">
              <div class="d-flex gap-3 p-3 border rounded shadow-soft h-100">
                <i class="bi bi-thermometer-sun"></i>
                <div>
                  <h6 class="mb-1">Thermal stability</h6>
                  <p class="mb-0 text-secondary small">Resists breakdown at high temperatures to protect under heavy loads.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="d-flex gap-3 p-3 border rounded shadow-soft h-100">
                <i class="bi bi-shield-check"></i>
                <div>
                  <h6 class="mb-1">Wear protection</h6>
                  <p class="mb-0 text-secondary small">Helps reduce engine wear for longer service life.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="d-flex gap-3 p-3 border rounded shadow-soft h-100">
                <i class="bi bi-droplet-half"></i>
                <div>
                  <h6 class="mb-1">Deposit control</h6>
                  <p class="mb-0 text-secondary small">Keeps engines cleaner by minimizing sludge and varnish.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="d-flex gap-3 p-3 border rounded shadow-soft h-100">
                <i class="bi bi-snow"></i>
                <div>
                  <h6 class="mb-1">Cold start performance</h6>
                  <p class="mb-0 text-secondary small">Multigrade viscosity aids lubrication during startup.</p>
                </div>
              </div>
            </div>
          </div>

          <hr class="my-4" />

          <!-- Applications -->
          <h2 class="section-title h4">Applications</h2>
          <p class="text-secondary">Recommended for light and heavy‑duty commercial vehicles where API SL/CF and SAE 20W‑50 are specified. Suitable for gasoline and certain diesel engines (check OEM guidance).</p>
          <ul class="list-unstyled row row-cols-1 row-cols-md-2 g-2">
            <li class="col"><i class="bi bi-truck me-2 text-success"></i>Trucks & buses</li>
            <li class="col"><i class="bi bi-bus-front me-2 text-success"></i>Urban stop‑start fleets</li>
            <li class="col"><i class="bi bi-gear me-2 text-success"></i>Mixed fleet operations</li>
            <li class="col"><i class="bi bi-building-gear me-2 text-success"></i>Construction equipment (where applicable)</li>
          </ul>

          <div class="accordion mt-4" id="benefitsAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="b1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1">Benefits</button></h2>
              <div id="collapseB1" class="accordion-collapse collapse show" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                  <ul class="mb-0">
                    <li>Helps extend engine life under severe operating conditions.</li>
                    <li>Good detergency/dispersancy for engine cleanliness.</li>
                    <li>Protects against rust and corrosion during downtime.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="b2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2">Specifications & Approvals</button></h2>
              <div id="collapseB2" class="accordion-collapse collapse" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                  <div class="d-flex flex-wrap gap-2">
                    <span class="badge badge-approval rounded-pill px-3 py-2">API SL/CF</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">ACEA A3/B3* (example)</span>
                    <span class="badge badge-approval rounded-pill px-3 py-2">OEM approvals – insert as needed</span>
                  </div>
                  <p class="small text-secondary mt-2 mb-0">*Replace/adjust specs according to your official product sheet.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="b3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3">Storage & Handling</button></h2>
              <div id="collapseB3" class="accordion-collapse collapse" data-bs-parent="#benefitsAccordion">
                <div class="accordion-body">
                  Store in a cool, dry place away from direct sunlight. Dispose of used oil responsibly according to local regulations.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick Specs Card -->
        <div class="col-lg-4">
          <div class="card shadow-soft border-0">
            <div class="card-body p-4">
              <h6 class="text-uppercase text-secondary mb-3">Quick specs</h6>
              <div class="d-flex flex-wrap gap-2 mb-3">
                <span class="spec-pill badge rounded-pill text-bg-light">SAE 20W‑50</span>
                <span class="spec-pill badge rounded-pill text-bg-light">Mineral</span>
                <span class="spec-pill badge rounded-pill text-bg-light">API SL/CF</span>
              </div>
              <ul class="list-unstyled small mb-0">
                <li class="d-flex justify-content-between py-1 border-bottom"><span>Viscosity @100°C</span><strong>~17 cSt*</strong></li>
                <li class="d-flex justify-content-between py-1 border-bottom"><span>Viscosity Index</span><strong>~120*</strong></li>
                <li class="d-flex justify-content-between py-1 border-bottom"><span>Pour Point</span><strong>~‑24°C*</strong></li>
                <li class="d-flex justify-content-between py-1"><span>Flash Point</span><strong>~230°C*</strong></li>
              </ul>
              <p class="small text-secondary mt-2">*Replace with actual values from PDS.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Data Table -->
  <section class="py-5 bg-light" id="technical-data">
    <div class="container">
      <h2 class="section-title h3 mb-4">Technical data (typical)</h2>
      <div class="table-responsive shadow-soft rounded">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-success">
            <tr>
              <th>Property</th>
              <th>Test Method</th>
              <th>Unit</th>
              <th>Typical Value*</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kinematic Viscosity @40°C</td>
              <td>ASTM D445</td>
              <td>cSt</td>
              <td>~150</td>
            </tr>
            <tr>
              <td>Kinematic Viscosity @100°C</td>
              <td>ASTM D445</td>
              <td>cSt</td>
              <td>~17</td>
            </tr>
            <tr>
              <td>Viscosity Index</td>
              <td>ASTM D2270</td>
              <td>—</td>
              <td>~120</td>
            </tr>
            <tr>
              <td>Density @15°C</td>
              <td>ASTM D4052</td>
              <td>kg/L</td>
              <td>~0.88</td>
            </tr>
            <tr>
              <td>Flash Point (COC)</td>
              <td>ASTM D92</td>
              <td>°C</td>
              <td>~230</td>
            </tr>
            <tr>
              <td>Pour Point</td>
              <td>ASTM D97</td>
              <td>°C</td>
              <td>~‑24</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="small text-secondary mt-2 mb-0">*Replace placeholders with official PDS values.</p>
    </div>
  </section>

  <!-- Downloads -->
  <section class="py-5" id="downloads">
    <div class="container">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-4">
          <div class="card h-100 download-card">
            <div class="card-body">
              <h5 class="card-title">Product Data Sheet (PDS)</h5>
              <p class="card-text text-secondary">Detailed technical information including properties and performance.</p>
              <a href="#" class="btn btn-outline-success"><i class="bi bi-file-earmark-text me-2"></i>Download PDF</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100 download-card">
            <div class="card-body">
              <h5 class="card-title">Safety Data Sheet (SDS)</h5>
              <p class="card-text text-secondary">Safety, handling, and regulatory information for safe use.</p>
              <a href="#" class="btn btn-outline-success"><i class="bi bi-shield-lock me-2"></i>Download PDF</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100 download-card">
            <div class="card-body">
              <h5 class="card-title">Brochure</h5>
              <p class="card-text text-secondary">Overview leaflet for customers and counter displays.</p>
              <a href="#" class="btn btn-outline-success"><i class="bi bi-badge-ad me-2"></i>Download PDF</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Products -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="section-title h3 mb-0">Related products</h2>
        <a href="#" class="link-success small">View all</a>
      </div>

      <div id="relCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="card border-0 shadow-soft h-100">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1542315192-1f61a1792f35?q=80&w=1200&auto=format&fit=crop" alt="bp Diesel Engine Oil" />
                  <div class="card-body">
                    <h6 class="card-title mb-1">Super V 15W‑40</h6>
                    <p class="card-text small text-secondary mb-2">High‑performance diesel/gasoline engine oil.</p>
                    <a class="btn btn-sm btn-success" href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card border-0 shadow-soft h-100">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1616002854115-1e6a394d8d2e?q=80&w=1200&auto=format&fit=crop" alt="bp Gear Oil" />
                  <div class="card-body">
                    <h6 class="card-title mb-1">Gear Oil EP 90</h6>
                    <p class="card-text small text-secondary mb-2">Extreme‑pressure gear lubricant for axles.</p>
                    <a class="btn btn-sm btn-success" href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card border-0 shadow-soft h-100">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1563720223185-11003d516935?q=80&w=1200&auto=format&fit=crop" alt="bp Hydraulic Oil" />
                  <div class="card-body">
                    <h6 class="card-title mb-1">Hydraulic Oil AW 68</h6>
                    <p class="card-text small text-secondary mb-2">Anti‑wear hydraulic fluid for industrial use.</p>
                    <a class="btn btn-sm btn-success" href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Duplicate the first item to create an infinite feel -->
          <div class="carousel-item">
            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="card border-0 shadow-soft h-100">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1589985270826-4a9a2194a86a?q=80&w=1200&auto=format&fit=crop" alt="bp Coolant" />
                  <div class="card-body">
                    <h6 class="card-title mb-1">Long‑life Coolant</h6>
                    <p class="card-text small text-secondary mb-2">Ethylene glycol‑based coolant concentrate.</p>
                    <a class="btn btn-sm btn-success" href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card border-0 shadow-soft h-100">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1552581234-26160f608093?q=80&w=1200&auto=format&fit=crop" alt="bp Grease" />
                  <div class="card-body">
                    <h6 class="card-title mb-1">Multipurpose Grease</h6>
                    <p class="card-text small text-secondary mb-2">Lithium‑based grease for bearings & chassis.</p>
                    <a class="btn btn-sm btn-success" href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card border-0 shadow-soft h-100">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1536909526839-2b69441f0063?q=80&w=1200&auto=format&fit=crop" alt="bp ATF" />
                  <div class="card-body">
                    <h6 class="card-title mb-1">ATF Dexron III</h6>
                    <p class="card-text small text-secondary mb-2">Automatic transmission fluid for passenger & CV.</p>
                    <a class="btn btn-sm btn-success" href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#relCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#relCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Where to Buy / CTA -->
  <section class="py-5 cta" id="where-to-buy">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <h2 class="h3 mb-2">Ready to use Super V 20W‑50?</h2>
          <p class="text-secondary mb-0">Find your nearest bp distributor or retailer. For bulk/commercial orders, contact our sales team.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="#" class="btn btn-success btn-lg"><i class="bi bi-geo-alt me-2"></i>Find a distributor</a>
        </div>
      </div>
    </div>
  </section>
 

  <script>
    document.getElementById('y').textContent = new Date().getFullYear();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 

@endsection