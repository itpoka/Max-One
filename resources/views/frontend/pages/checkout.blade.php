@extends('frontend.master')
@section('content')

<div class="container my-5">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col text-center">
            <h5 class="fw-bold text-secondary d-none d-md-block">SHOPPING CART &gt; CHECKOUT DETAILS &gt; ORDER COMPLETE</h5>
            <h5 class="fw-bold text-secondary d-block d-md-none">Checkout Details</h5>
        </div>
    </div>

    <div class="row">
        <!-- Billing & Shipping Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="card-title fw-bold border-bottom pb-2 mb-3">BILLING & SHIPPING</h6>
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">আপনার নাম</label>
                            <input type="text" class="form-control" placeholder="Write your name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">আপনার ফোন নম্বর</label>
                            <input type="text" class="form-control" placeholder="+880">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">আপনার ঠিকানা লিখুন</label>
                            <input type="text" class="form-control" placeholder="Write your address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">আপনার (গ্রাম/উপজেলা/জেলা) (optional)</label>
                            <select class="form-select">
                                <option>Dhaka</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Country</label>
                            <input type="text" class="form-control" value="Bangladesh" readonly>
                        </div>
                        <h6 class="fw-bold border-bottom pb-2 mb-3 mt-4">ADDITIONAL INFORMATION</h6>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Order notes (optional)</label>
                            <textarea class="form-control" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Order Summary Card -->
        <div class="col-md-6 mb-4 card-body">
            <div class="card card-body ">
                <div class="card-body">
                    <h6 class="card-title fw-bold border-bottom pb-2 mb-3">YOUR ORDER</h6>

                    <!-- Order Items -->
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div>মাটি লাচ্ছা (সেমাই) | Shahi Laccha Semai - ১০০০ গ্রাম × 2</div>
                            <span class="fw-semibold">1,500৳</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div>মসলা কম্বো | Spices Combo - (কাঠি × 1)</div>
                            <span class="fw-semibold">1,790৳</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div>মাটি মাছের মাংসা | Shahi Meat Masala - ২০০ গ্রাম × 1</div>
                            <span class="fw-semibold">450৳</span>
                        </li>
                    </ul>

                    <!-- Subtotal & Shipping -->
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>Subtotal</span>
                            <span class="fw-semibold">3,740৳</span>
                        </li>
                        <li class="list-group-item px-0">
                            <span class="fw-semibold">Shipping</span>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="shipping" id="shipping1" value="70" checked>
                                <label class="form-check-label" for="shipping1">ঢাকার মধ্যে: 70৳</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping" id="shipping2" value="100">
                                <label class="form-check-label" for="shipping2">ঢাকার বাহিরে: 100৳</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping" id="shipping3" value="130">
                                <label class="form-check-label" for="shipping3">উপজেলা বাহিরে: 130৳</label>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0 mt-2">
                            <span>Total</span>
                            <span class="fw-bold">3,810৳</span>
                        </li>
                    </ul>

                    <!-- Payment Options -->
                    <h6 class="fw-bold border-bottom pb-2 mb-3 mt-3">Payment Method</h6>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="payment" id="payment1" checked>
                        <label class="form-check-label" for="payment1">Cash on delivery</label>
                        <div id="cod-text" class="small text-muted mt-1">
                            (১০০% নিশ্চিত হয়ে অর্ডার করুন। পণ্য হাতে পেয়ে ডেলিভারি ম্যানকে পেমেন্ট করতে পারবেন।)
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="payment" id="payment2">
                        <label class="form-check-label" for="payment2">bKash Payment</label>
                        <div id="bkash-text" class="small text-muted mt-1 d-none">
                            Pay with bKash PGW.
                            <img src="frontend/img/bkash.png" alt="bKash" class="img-fluid" style="width:50px; margin-left:5px;">
                        </div>
                    </div>

                    <!-- Place Order Buttons -->
                    <button id="btn-cod" type="button" class="btn btn-dark w-100 fw-bold mb-2">PLACE ORDER</button>
                    <button id="btn-bkash" type="button" class="btn btn-dark w-100 fw-bold d-none">PAY WITH BKASH</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const payment1 = document.getElementById('payment1');
    const payment2 = document.getElementById('payment2');
    const codText = document.getElementById('cod-text');
    const bkashText = document.getElementById('bkash-text');
    const btnCod = document.getElementById('btn-cod');
    const btnBkash = document.getElementById('btn-bkash');

    payment1.addEventListener('change', () => {
        if(payment1.checked) {
            codText.classList.remove('d-none');
            bkashText.classList.add('d-none');
            btnCod.classList.remove('d-none');
            btnBkash.classList.add('d-none');
        }
    });

    payment2.addEventListener('change', () => {
        if(payment2.checked) {
            codText.classList.add('d-none');
            bkashText.classList.remove('d-none');
            btnCod.classList.add('d-none');
            btnBkash.classList.remove('d-none');
        }
    });
</script>

@endsection
