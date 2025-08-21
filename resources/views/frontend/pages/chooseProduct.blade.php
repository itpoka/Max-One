@extends('frontend.master')
@section('content')


 <style>
    .breadcrumb a {
      text-decoration: none;
    }
    .selector-container {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
    }
    .selector-container label {
      font-weight: 500;
    }
    .btn-recommendation {
      margin-top: 15px;
    }
  </style>


<div class="container my-5">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Find the right oil and oil filter for your vehicle</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="mb-2">Find the right oil and oil filter for your car</h1>
  <p class="mb-4">Use the tool below to tell us more about your vehicle and we’ll tell you how to keep it running like new.</p>

  <!-- Form -->
  <div class="selector-container">
    <div class="row g-3 align-items-center">
      <div class="col-md-2">
        <label for="year" class="form-label">Year</label>
        <select class="form-select" id="year">
          <option selected disabled>Select year</option>
          <option>2025</option>
          <option>2024</option>
          <option>2023</option>
          <option>2022</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="make" class="form-label">Make</label>
        <select class="form-select" id="make">
          <option selected disabled>Select make</option>
          <option>Toyota</option>
          <option>Honda</option>
          <option>Ford</option>
          <option>BMW</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="model" class="form-label">Model</label>
        <select class="form-select" id="model">
          <option selected disabled>Select model</option>
          <option>Corolla</option>
          <option>Civic</option>
          <option>Mustang</option>
          <option>X5</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="engine" class="form-label">Engine</label>
        <select class="form-select" id="engine">
          <option selected disabled>Select engine</option>
          <option>1.6L</option>
          <option>2.0L</option>
          <option>2.5L</option>
        </select>
      </div>

      <div class="col-md-2 d-flex align-items-center mt-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="over75k">
          <label class="form-check-label" for="over75k">
            Over 75,000 miles?
          </label>
        </div>
      </div>
    </div>

    <button class="btn btn-secondary btn-lg btn-recommendation" disabled>View your recommendations</button>
    <p class="mt-3">Please consult your vehicle manufacturer's manual for information specific to your vehicle.</p>
  </div>

</div>

 <script>
  // Enable button only when all dropdowns have a value
  const selects = document.querySelectorAll('.selector-container select');
  const checkbox = document.getElementById('over75k');
  const btn = document.querySelector('.btn-recommendation');

  selects.forEach(select => {
    select.addEventListener('change', checkForm);
  });

  checkbox.addEventListener('change', checkForm);

  function checkForm() {
    const allSelected = Array.from(selects).every(s => s.value !== "" && s.value !== null);
    btn.disabled = !allSelected;
    btn.className = allSelected ? 'btn btn-primary btn-lg btn-recommendation' : 'btn btn-secondary btn-lg btn-recommendation';
  }
</script>

@endsection