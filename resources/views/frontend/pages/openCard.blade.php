@extends('frontend.master')
@section('content')

    <style>
        .cart-header {
            text-align: center;
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 30px;
        }
        .product-img {
            width: 70px;
            height: auto;
            margin-right: 10px;
        }
        .remove-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid #ccc;
            background: #fff;
            color: #888;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }
        .remove-btn:hover {
            color: #fff;
            background: red;
            border-color: red;
        }
        .qty-box {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .qty-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid #ccc;
            background: #f8f9fa;
            font-size: 18px;
            line-height: 1;
        }
        .qty-input {
            width: 55px;
            text-align: center;
        }
        .action-buttons {
            margin-top: 30px;
        }
        .cart-totals-card {
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border-radius: 10px;
            border: none;
        }
        .coupon-section {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
        }

        /* Mobile adjustments */
        @media (max-width: 767px) {
            .mobile-product {
                display: block !important;
            }
            .mobile-cart-item {
                display: flex;
                align-items: center;
                gap: 5px;
            }
            .img-wrapper {
                position: relative;
                flex: 0 0 70px;
            }
            .img-wrapper img {
                width: 100%;
                border-radius: 6px;
            }
            .img-wrapper .remove-btn {
                position: absolute;
                top: -8px;
                left: -8px;
                width: 24px;
                height: 24px;
                font-size: 14px;
                border-radius: 50%;
                border: 1px solid #ccc;
                background: #fff;
                color: #888;
            }
            .product-info {
                flex: 1;
            }
            .product-name {
                font-size: 12px;
                font-weight: 500;
            }
            .product-price {
                font-size: 13px;
                margin-top: 4px;
                color: #555;
            }
            .qty-wrapper {
                flex: 0 0 auto;
            }
            .qty-box .qty-input {
                width: 30px;
                text-align: center;
                padding: 2px;
            }
            .qty-btn {
                width: 28px;
                height: 28px;
                border-radius: 50%;
                border: 1px solid #ccc;
                background: #f8f9fa;
                font-size: 16px;
                line-height: 1;
            }
            .action-buttons .btn {
                padding: 10px;
                font-size: 14px;
            }
            .cart-header {
                font-size: 18px;
                margin-bottom: 20px;
            }
        }
    </style>
<div class="container my-5">
        <!-- Header -->
        <div class="cart-header d-none d-md-block">SHOPPING CART &gt; CHECKOUT DETAILS &gt; ORDER COMPLETE</div>
        <div class="cart-header d-block d-md-none">SHOPPING CART</div>

        <div class="row">
            <!-- Left: Product Table (Desktop) -->
            <div class="col-lg-8">
                <!-- Desktop Table -->
                <div class="d-none d-md-block">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>SUBTOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <button class="remove-btn">&times;</button>
                                        <img src="frontend/img/web.png" class="product-img" alt="Product">
                                        <span>শাহী লাচ্ছা সেমাই ( ঘিয়ে ভাজা ) - ৫০০ গ্রাম</span>
                                    </div>
                                </td>
                                <td>750৳</td>
                                <td>
                                    <div class="qty-box">
                                        <button class="qty-btn">-</button>
                                        <input type="text" class="form-control qty-input" value="1">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </td>
                                <td>750৳</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <button class="remove-btn">&times;</button>
                                        <img src="frontend/img/web.png" class="product-img" alt="Product">
                                        <span>মশলা কম্বো - ২ কেজি</span>
                                    </div>
                                </td>
                                <td>1,790৳</td>
                                <td>
                                    <div class="qty-box">
                                        <button class="qty-btn">-</button>
                                        <input type="text" class="form-control qty-input" value="1">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </td>
                                <td>1,790৳</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Product Cards -->
                <div class="d-block d-md-none mobile-product">
                <div class="row ">
                <span class="col-8  text-left">PRODUCT</span>
                <span class="col-4  text-right" >QUANTITY</span>
                </div>
                    <div class="card mb-3 p-3">
                       
                        <div class="row align-items-center">
                            <!-- Left: Image + Remove Button -->
                            <div class="col-2 position-relative">
                                <img src="frontend/img/web.png" class="img-fluid rounded product-img" alt="Product">
                                <button class="remove-btn position-absolute top-0 start-0 translate-middle-y ms-1 mt-1">&times;</button>
                            </div>

                            <!-- Middle: Name + Price -->
                            <div class="col-6">
                                <div class="product-name fw-bold">
                                    শাহী লাচ্ছা সেমাই ( ঘিয়ে ভাজা ) - ৫০০ গ্রাম
                                </div>
                                <div class="product-price text-muted mt-1">
                                    1 x <strong>750৳</strong>
                                </div>
                            </div>

                            <!-- Right: Quantity -->
                            <div class="col-4">
                                <div class="qty-box d-flex align-items-center justify-content-end">
                                    <button class="qty-btn">-</button>
                                    <input type="text" class="form-control qty-input" value="1">
                                    <button class="qty-btn">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3 p-3">
                        <div class="row align-items-center">
                            <div class="col-2 position-relative">
                                <img src="frontend/img/web.png" class="img-fluid rounded product-img" alt="Product">
                                <button class="remove-btn position-absolute top-0 start-0 translate-middle-y ms-1 mt-1">&times;</button>
                            </div>
                            <div class="col-6">
                                <div class="product-name fw-bold">
                                    মশলা কম্বো - ২ কেজি
                                </div>
                                <div class="product-price text-muted mt-1">
                                    1 x <strong>1,790৳</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="qty-box d-flex align-items-center justify-content-end">
                                    <button class="qty-btn">-</button>
                                    <input type="text" class="form-control qty-input" value="1">
                                    <button class="qty-btn">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons (for both desktop and mobile) -->
                <div class="action-buttons">
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-outline-dark flex-grow-1 flex-md-grow-0">
                            <i class="bi bi-arrow-left me-1 d-none d-md-inline"></i> CONTINUE SHOPPING
                        </button>
                        <button class="btn btn-dark flex-grow-1 flex-md-grow-0">UPDATE CART</button>
                    </div>
                </div>
            </div> <!-- end col8 -->

            <!-- Right: Cart Totals -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card cart-totals-card border-0 p-4">
                    <h5 class="mb-4 fw-bold">CART TOTALS</h5>
                    <hr class="my-3">

                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>2,540৳</span>
                    </div>
                    <hr class="my-3">

                    <div class="mb-3">
                        <label class="d-block mb-2 fw-bold">Shipping</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping1" checked>
                            <label class="form-check-label" for="shipping1">ঢাকার মধ্যে: 70৳</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping2">
                            <label class="form-check-label" for="shipping2">ঢাকার পার্শ্ববর্তী এলাকা: 100৳</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="shipping" id="shipping3">
                            <label class="form-check-label" for="shipping3">ঢাকার বাইরে: 130৳</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between fw-bold mb-3">
                        <span>Total</span>
                        <span>2,610৳</span>
                    </div>

                    <button class="btn btn-dark w-100 py-2 fw-bold mb-3" onclick="window.location.href='http://127.0.0.1:8000/checkout'">PROCEED TO CHECKOUT</button>

                    <div class="coupon-section">
                        <div class="mb-2 d-flex align-items-center">
                            <i class="bi bi-tag-fill me-2"></i>
                            <span class="fw-bold">Coupon</span>
                        </div>
                        <input type="text" class="form-control mb-2" placeholder="Coupon code">
                        <button class="btn border w-100 py-2">Apply coupon</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script>
        // Quantity control functionality
        document.querySelectorAll('.qty-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.qty-input');
                let value = parseInt(input.value);
                
                if (this.textContent === '+') {
                    input.value = value + 1;
                } else {
                    if (value > 1) {
                        input.value = value - 1;
                    }
                }
            });
        });
        
        // Remove product functionality
        document.querySelectorAll('.remove-btn').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('tr, .card').remove();
            });
        });
    </script>

@endsection
