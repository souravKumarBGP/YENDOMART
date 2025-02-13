<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yendo Ecommerce |Checkout| Online electronic shop</title>
        <meta name="keywords" content="Yendo Ecommerce, Ecommerce" />
        <meta name="discreption" content="This yendo ecommerce website" />
        <meta name="author" content="Sourav Rupani" />
        <meta name="robots" content="index, following" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!--================================== External file link's ===============================-->
        <link href="{{ asset("assets/css/frontend/bootstrap-grid.min.css") }}" rel="stylesheet" />
        
        <!--================================== Internal file link's ===============================-->
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/common.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/navbar.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/footer.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/checout.css") }}" />
    </head>
    <body>
        <!--================================== Start header section ===============================-->
        <header>
            <!--=================== Start navbar section ==================-->
            @include("layoutes.navbar")
            <!--./nav-->
        </header><!--./header-->

        <!--================================== Start main section =================================-->
        <main>

            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-9 mx-auto">

                        <div class="heading" style="text-align: center">
                            <big><b>Checkout</b></big><br/>
                            <small>Your payment is compleated in 4 stepes.</small>
                        </div><br/>
                        
                        <!--==================== Start login_link_section ===================-->
                        <section class="signup_link_section">

                            <div class="link login_link d-flex align-items-center justify-content-between">

                                <div class="left">
                                    <button class="p-1 py-0 btn" style="margin-top: 1px;">1</button>
                                    New customer? 
                                    <b>
                                        <input type="checkbox" id="checkbox1" @auth {{ "disabled" }} @endauth />
                                        Click here to signup
                                    </b>
                                </div><!--./left-->

                                @auth
                                    <div class="right">
                                        <b style="color: #05c605;" class="d-flex align-items-center">
                                            <span style="color: #05c605;" class="d-none d-sm-inline-block">
                                                Compleated
                                            </span>
                                            <svg style="color: #05c605;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M11.644 3.066a1 1 0 0 1 .712 0l7 2.666A1 1 0 0 1 20 6.68a17.694 17.694 0 0 1-2.023 7.98 17.406 17.406 0 0 1-5.402 6.158 1 1 0 0 1-1.15 0 17.405 17.405 0 0 1-5.403-6.157A17.695 17.695 0 0 1 4 6.68a1 1 0 0 1 .644-.949l7-2.666Zm4.014 7.187a1 1 0 0 0-1.316-1.506l-3.296 2.884-.839-.838a1 1 0 0 0-1.414 1.414l1.5 1.5a1 1 0 0 0 1.366.046l4-3.5Z" clip-rule="evenodd"/>
                                            </svg>                                                                                    
                                        </b>
                                    </div><!--./right-->
                                @endauth
                            </div><!--./login_link-->
                            
                            <div class="form_box">
                                <form action="#" method="POST">
                                    <small>Hellow ! Welcome to my IT Care Lappy Wala electronic shop.</small>
                                    <br/>
                                    <small>If you have shopped with us before, please enter your details below. If you are a new customer, please create your account.</small>
                                    <br/><br/>

                                    <div class="input_box d-flex gap-15px">

                                        <div class="item d-flex flex-column">
                                            <label for="log_pass">Name <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="s_name" name="name" @auth value="{{ Auth::user()->full_name }}" {{ "disabled" }} @endauth placeholder="Name" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="s_email">Email Id <small style="color: #fd4747;">*</small></label>
                                            <input type="email" id="s_email" name="email" @auth value="{{ Auth::user()->email }}" {{ "disabled" }} @endauth placeholder="Email Id" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->
                                    

                                    <div class="input_box d-flex gap-15px mt-4">

                                        <div class="item d-flex flex-column">
                                            <label for="c_password">Create password <small style="color: #fd4747;">*</small></label>
                                            <input type="password" id="c_password" value="*********" name="password" @auth {{ "disabled" }} @endauth placeholder="Password" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="conf_pass">Confirm password <small style="color: #fd4747;">*</small></label>
                                            <input type="password" id="conf_pass" value="*********" name="conf_pass" @auth {{ "disabled" }} @endauth placeholder="Same password" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->
                                    

                                    @auth
                                        <button disabled style="background: #80808062;" class="login_btn btn" type="submit">Signup</button>
                                        <br/><br/>
                                        <small style="color: #05c605;"><b>Step 1. Compleated</b></small>
                                    @endauth

                                    @guest
                                        <button class="login_btn btn" type="submit">Signup</button>
                                    @endguest


                                    
                                    <br/>
                                    
                                </form>
                            </div><!--./form_box-->

                        </section><!--./login_link_section-->
                        
                        
                        <!--==================== Start login_link_section ===================-->
                        <section class="login_link_section mt-4">

                            <div class="link login_link d-flex align-items-center justify-content-between">
                                <div class="left">
                                    <button class="p-1 py-0 btn" style="margin-top: 1px;">2</button>
                                    Returning customer? 
                                    <b>
                                        <input type="checkbox" id="checkbox1" @auth {{ "disabled" }} @endauth />
                                        Click here to login
                                    </b>
                                </div><!--./left-->

                                @auth
                                    <div class="right">
                                        <b style="color: #05c605;" class="d-flex align-items-center">
                                            <span style="color: #05c605;" class="d-none d-sm-inline-block">
                                                Compleated
                                            </span>
                                            <svg style="color: #05c605;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M11.644 3.066a1 1 0 0 1 .712 0l7 2.666A1 1 0 0 1 20 6.68a17.694 17.694 0 0 1-2.023 7.98 17.406 17.406 0 0 1-5.402 6.158 1 1 0 0 1-1.15 0 17.405 17.405 0 0 1-5.403-6.157A17.695 17.695 0 0 1 4 6.68a1 1 0 0 1 .644-.949l7-2.666Zm4.014 7.187a1 1 0 0 0-1.316-1.506l-3.296 2.884-.839-.838a1 1 0 0 0-1.414 1.414l1.5 1.5a1 1 0 0 0 1.366.046l4-3.5Z" clip-rule="evenodd"/>
                                            </svg>                                                                                    
                                        </b>
                                    </div><!--./right-->
                                @endauth
                                
                            </div><!--./login_link-->
                            
                            <div class="form_box">
                                <form action="#">
                                    <small>Welcome back! Sign in to your account.</small>
                                    <br/>
                                    <small>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.</small>
                                    <br/><br/>

                                    <div class="input_box d-flex gap-15px">

                                        <div class="item d-flex flex-column">
                                            <label for="log_email">Email Id <small style="color: #fd4747;">*</small></label>
                                            <input type="email" id="log_email" name="log_email" placeholder="Email Id" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="log_pass">Password <small style="color: #fd4747;">*</small></label>
                                            <input type="password" id="log_pass" name="log_pass" placeholder="Password" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->
                                    <div class="input_box mt-3">
                                        <smal class="d-flex align-items-center" style="gap: 7px;">
                                            <input id="remember_btn" type="checkbox">
                                            <label for="remember_btn" style="color: #4e4d4d; font-width: 700; font-size: 13px; cursor: pointer;"><b>Remember Me</b></label>
                                        </smal>
                                    </div>

                                    <button class="login_btn btn" type="submit">Login</button>
                                    <br/>
                                    <a href="#" id="forget_pass_link">Forget your password</a>
                                    
                                </form>
                            </div><!--./form_box-->

                        </section><!--./login_link_section-->
                        
                        <!--==================== Start bill_details section ===================-->
                        <section class="bill_details mt-4">

                            <div class="link d-flex align-items-center justify-content-between">
                                <div class="left">
                                    <button class="p-1 py-0 btn" style="margin-top: 1px;">3</button>
                                    Enter your delivery details
                                    <b>
                                        <input type="checkbox" id="checkbox4" @auth @if(Auth::user()->phone && Auth::user()->pincode) value="compleated" @endif @endauth  />
                                        Click here to enter
                                    </b>
                                </div><!--./left-->


                                @auth
                                    @if(Auth::user()->phone && Auth::user()->pincode)
                                        <div class="right">
                                            <b style="color: #05c605;" class="d-flex align-items-center">
                                                <span style="color: #05c605;" class="d-none d-sm-inline-block">
                                                    Compleated
                                                </span>
                                                <svg style="color: #05c605;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M11.644 3.066a1 1 0 0 1 .712 0l7 2.666A1 1 0 0 1 20 6.68a17.694 17.694 0 0 1-2.023 7.98 17.406 17.406 0 0 1-5.402 6.158 1 1 0 0 1-1.15 0 17.405 17.405 0 0 1-5.403-6.157A17.695 17.695 0 0 1 4 6.68a1 1 0 0 1 .644-.949l7-2.666Zm4.014 7.187a1 1 0 0 0-1.316-1.506l-3.296 2.884-.839-.838a1 1 0 0 0-1.414 1.414l1.5 1.5a1 1 0 0 0 1.366.046l4-3.5Z" clip-rule="evenodd"/>
                                                </svg>                                                                                    
                                            </b>
                                        </div><!--./right-->
                                    @endif
                                @endauth
                            </div><!--./login_link-->
                            
                            <div class="form_box">
                                <form id="bill_details_form" action="{{ route("user.update_profile_info_request") }}" method="POST">

                                    @csrf
                                    @method("POST")
                                    
                                    <small>Update your details.</small>
                                    <br/><br/>

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="full_name">Name <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="full_name" name="full_name" @auth value="{{ Auth::user()->full_name }}" @endauth placeholder="Name" />
                                            
                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter your name.
                                            </small>
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="email">Email Id <small style="color: #fd4747;">*</small></label>
                                            <input type="email" id="email" name="email" @auth value="{{ Auth::user()->email }}" @endauth disabled placeholder="Email Id" />

                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter your email id.
                                            </small>
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="phone">Phone No <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="phone" name="phone" @auth value="{{ Auth::user()->phone }}" @endauth placeholder="Phone No" />

                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter your phone number.
                                            </small>
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="countary">Countary <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="countary" name="countary" value="India" disabled placeholder="Countary" />

                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter your countary name.
                                            </small>
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="state">State <small style="color: #fd4747;">*</small></label>

                                            <select name="state" id="state">
                                                @php
                                                    $userState = Auth::user()->state ?? ''; // Get user's state or set default as empty
                                                @endphp
                                            
                                                <option value="bihar" {{ $userState == "bihar" ? "selected" : "" }}>Bihar</option>
                                                <option value="jharkhand" {{ $userState == "jharkhand" ? "selected" : "" }}>Jharkhand</option>
                                                <option value="andhra_pradesh" {{ $userState == "andhra_pradesh" ? "selected" : "" }}>Andhra Pradesh</option>
                                                <option value="arunachal_pradesh" {{ $userState == "arunachal_pradesh" ? "selected" : "" }}>Arunachal Pradesh</option>
                                                <option value="assam" {{ $userState == "assam" ? "selected" : "" }}>Assam</option>
                                                <option value="chhattisgarh" {{ $userState == "chhattisgarh" ? "selected" : "" }}>Chhattisgarh</option>
                                                <option value="goa" {{ $userState == "goa" ? "selected" : "" }}>Goa</option>
                                                <option value="gujarat" {{ $userState == "gujarat" ? "selected" : "" }}>Gujarat</option>
                                                <option value="haryana" {{ $userState == "haryana" ? "selected" : "" }}>Haryana</option>
                                                <option value="himachal_pradesh" {{ $userState == "himachal_pradesh" ? "selected" : "" }}>Himachal Pradesh</option>
                                                <option value="karnataka" {{ $userState == "karnataka" ? "selected" : "" }}>Karnataka</option>
                                                <option value="kerala" {{ $userState == "kerala" ? "selected" : "" }}>Kerala</option>
                                                <option value="madhya_pradesh" {{ $userState == "madhya_pradesh" ? "selected" : "" }}>Madhya Pradesh</option>
                                                <option value="maharashtra" {{ $userState == "maharashtra" ? "selected" : "" }}>Maharashtra</option>
                                                <option value="manipur" {{ $userState == "manipur" ? "selected" : "" }}>Manipur</option>
                                                <option value="meghalaya" {{ $userState == "meghalaya" ? "selected" : "" }}>Meghalaya</option>
                                                <option value="mizoram" {{ $userState == "mizoram" ? "selected" : "" }}>Mizoram</option>
                                                <option value="nagaland" {{ $userState == "nagaland" ? "selected" : "" }}>Nagaland</option>
                                                <option value="odisha" {{ $userState == "odisha" ? "selected" : "" }}>Odisha</option>
                                                <option value="punjab" {{ $userState == "punjab" ? "selected" : "" }}>Punjab</option>
                                                <option value="rajasthan" {{ $userState == "rajasthan" ? "selected" : "" }}>Rajasthan</option>
                                                <option value="sikkim" {{ $userState == "sikkim" ? "selected" : "" }}>Sikkim</option>
                                                <option value="tamil_nadu" {{ $userState == "tamil_nadu" ? "selected" : "" }}>Tamil Nadu</option>
                                                <option value="telangana" {{ $userState == "telangana" ? "selected" : "" }}>Telangana</option>
                                                <option value="tripura" {{ $userState == "tripura" ? "selected" : "" }}>Tripura</option>
                                                <option value="uttar_pradesh" {{ $userState == "uttar_pradesh" ? "selected" : "" }}>Uttar Pradesh</option>
                                                <option value="uttarakhand" {{ $userState == "uttarakhand" ? "selected" : "" }}>Uttarakhand</option>
                                                <option value="west_bengal" {{ $userState == "west_bengal" ? "selected" : "" }}>West Bengal</option>
                                                <option value="chandigarh" {{ $userState == "chandigarh" ? "selected" : "" }}>Chandigarh</option>
                                                <option value="delhi" {{ $userState == "delhi" ? "selected" : "" }}>Delhi</option>
                                                <option value="jammu_kashmir" {{ $userState == "jammu_kashmir" ? "selected" : "" }}>Jammu and Kashmir</option>
                                            </select>
                                            

                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter your state name.
                                            </small>
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="district">District <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="district" name="district" @auth value="{{ Auth::user()->district }}" @endauth placeholder="District" />

                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter your district name.
                                            </small>
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="pincode">Pin Code <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="pincode" name="pincode" @auth value="{{ Auth::user()->pincode }}" @endauth placeholder="Pincode" />

                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter your pincode.
                                            </small>
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="famous_place">Famous Place <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="famous_place" name="famous_place" @auth value="{{ Auth::user()->famous_place }}" @endauth placeholder="Famous place" />

                                            <small class="error mt-1" style="color: #ff0b2b;">
                                                Please enter famous place nere your.
                                            </small>
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->

                                    <div class="item d-flex flex-column mt-3">
                                        <label style="color: black; font-size: 13px;"  for="delivery_address"><b>Delivery Address</b> <small style="color: #fd4747;">*</small></label>
                                        <textarea class="mt-2" style="border: 0.2px solid #d9d8d896; border-radius: 7px; padding: 10px;" name="delivery_address" id="delivery_address" rows="6">Nathnagar</textarea>

                                        <small class="error mt-1" style="color: #ff0b2b;">
                                            Please enter your delivery address.
                                        </small>
                                    </div><!--./item-->
                                    
                                    <button class="submit_btn login_btn btn" type="submit">Submit</button>
                                    <br/>
                                </form>
                                <br/><b/>
                            </div><!--./form_box-->

                        </section><!--./bill_details section-->
                        
                        <!--==================== Start login_link_section ===================-->
                        <section class="payment_option mt-4">

                            <div class="link">
                                <button class="p-1 py-0 btn" style="margin-top: 1px;">4</button>
                                <span style="color: #4b4949; font-weight: normal;">Payment Option</span>
                                <b>
                                    <input type="checkbox" id="checkbox5" checked>
                                    Click here to check
                                </b>
                            </div><!--./login_link-->
                            
                            <div class="form_box">
                                <div class="row pt-4" style="height: 100%;">
                                    
                                    <div class="left col-12 col-lg-8">
                                        <ul>

                                            @foreach ($cart_data as $item)
                                                <li class="d-flex align-items-center justify-content-between mb-3" style="border-bottom: 0.5px solid #8080802a;">
                                                    <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="{{ $item->name }}">
                                                    <p class="product_name">{{ $item->name }}</p>
                                                    <p class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                            <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                        </svg>
                                                        <b>{{ $item->selling_price }}</b>
                                                    </p>
                                                </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div><!--./left-->

                                    <div class="right col-12 col-lg-4">
                                        
                                        <form action="{{ route("product.orders.order_request") }}" id="place_order_form" method="POST">
                                            
                                            @method("POST")
                                            @csrf
                                            
                                            <ul>
                                                
                                                <li>
                                                    <span>Total Amount</span>
                                                    <b>₹{{ $sub_total }}</b>
                                                </li>
                                                
                                                <li>
                                                    <input type="text" placeholder="Cupon code"> 
                                                    <button class="apply_btn btn">Apply</button>
                                                </li>
                                            </ul>
                                            <br/>
                                            <hr><br/>
                                            <div class="payment_mode_box">
                                                <div class="d-flex align-items-center mb-1" style="gap: 7px;">
                                                    <input type="radio" checked name="payment_methods" id="cod" value="cod" />
                                                    <label for="cod">Cash on dilevery <small style="color: #05c605;">Booking Charges ₹999</small></label>
                                                </div>
                                                <div class="d-flex align-items-center mb-1" style="gap: 7px;">
                                                    <input type="radio" name="payment_methods" id="online" value="online" />
                                                    <label for="online">Online</label>
                                                </div>
                                            </div>

                                            <button type="submit" id="place_order" class="btn place_oder_btn py-3" @if($sub_total == 0) {{ "disabled" }} @endif >
                                                Place Order
                                            </button>
                                            <br/><br/>
                                            <small style="color: #0280f6;"><a href="tel:7763999333" target="_blank">Get Help +91 7763999333</a></small>
                                        </form>
                                    </div><!--./right-->
                                    
                                </div>
                            </div><!--./form_box-->

                        </section><!--./login_link_section-->
                        
                    </div>
                </div><!--./row-->

            </div><!--./container-->
            
        </main><!--./main-->
        
        <!--================================== Start Footer section ===============================-->
        @include("layoutes.footer")
        <!--./footer-->

        <!--================================== External script writing ============================-->
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--================================== Internal script writing ============================-->
        <script>

            $(document).ready(function(){

                // Logic to handle a ajax request for store my favorites product
                $(".like_btn").on("click", function(event){
                    event.preventDefault();
                    
                    let id = $(this).data("id");
                    
                    // Make a request
                    $.ajax({
                        url: "{{ route("product.my_wishlist.store") }}",
                        type: "POST",
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            "content-type": "application/json"
                        },
                        data: JSON.stringify({"product_id": id}),

                        success: function(resp){
                            
                            if(resp.status == "success"){
                                
                                $(".favorite .badges").text(function(_, currentText) {
                                    return Number(currentText) + 1;
                                });
                                
                                Swal.fire({
                                    title: "Success",
                                    text: "Product added successfully.",
                                    icon: "success"
                                });
                            }else if(resp.status == "user_not_login"){
                                
                                window.location.href = "{{ route("pages.signup_login_page") }}"
                            }else if(resp.status == "product_exist"){

                                Swal.fire({
                                    title: "Warning",
                                    text: "This product has been already added.",
                                    icon: "warning",
                                });
                            }else{

                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: "Unable to add product. Please try again latter !",
                                });
                            }
                        },
                        
                        error: function(resp){
                            console.log(resp);
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Something went wrong. Please try again latter !",
                            });
                        }
                    });
                    
                });
                
                // Logic to handle a ajax request for store product into my cart
                $(".add_cart_btn").on("click", function(event){

                    event.preventDefault();

                    // Get the product id
                    const id = $(this).data("id");

                    // Make a request
                    $.ajax({
                        url: "{{ route("product.my_cart.store") }}",
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            "content-type": "application/json"
                        },
                        data: JSON.stringify({"product_id": id}),
                        dataType: "json",

                        success: function(resp){

                            if(resp.status == "success"){
                                
                                $(".my_cart .badges").text(function(_, currentText) {
                                    return Number(currentText) + 1;
                                });
                                
                                Swal.fire({
                                    title: "Success",
                                    text: "Product added successfully.",
                                    icon: "success"
                                });

                            }else if(resp.status == "user_not_login"){
                                
                                window.location.href = "{{ route("pages.signup_login_page") }}"

                            }else if(resp.status == "product_exist"){

                                Swal.fire({
                                    title: "Warning",
                                    text: "This product has been already added.",
                                    icon: "warning",
                                });
                            }else{

                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: "Unable to add product. Please try again latter !",
                                });
                            }
                        },

                        error: function(resp){
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Something went wrong. Please try again latter !",
                            });
                        }

                    });
                });

                // Logic to make a ajax request for update user information or delivery details or bill details
                $("#bill_details_form").on("submit", function(event){
                    event.preventDefault();
                    
                    //=============== Logic to perform clint side validation
                    // Validation for full name
                    const full_name = event.target.full_name;
                    if(full_name.value.trim() == ""){

                        full_name.focus();
                        full_name.style.borderColor = "#f8020f";
                        full_name.nextElementSibling.style.display = "block";
                        full_name.nextElementSibling.innerText = "Full name feild is required. Please enter your full name.";
                        return;
                    }else if(full_name.value.trim().length > 100){

                        full_name.focus();
                        full_name.style.borderColor = "#f8020f";
                        full_name.nextElementSibling.style.display = "block";
                        full_name.nextElementSibling.innerText = "Your full name cannot be exceed 100 characters. Please enter sort name.";
                        return;
                    }else{

                        full_name.style.borderColor = "var(--shadow-color)";
                        full_name.nextElementSibling.style.display = "none";
                    }

                    // Validation for email id
                    const email = event.target.email;
                    if(email.value.trim() == ""){

                        email.focus();
                        email.style.borderColor = "#f8020f";
                        email.nextElementSibling.style.display = "block";
                        email.nextElementSibling.innerText = "Email feild is required. Please enter your email id.";
                        return;
                    }else if(email.value.trim().length > 100){

                        email.focus();
                        email.style.borderColor = "#f8020f";
                        email.nextElementSibling.style.display = "block";
                        email.nextElementSibling.innerText = "Email cannot be exceed 100 characters. Please enter sort email.";
                        return;
                    }else if(!(email.value.trim().includes("@") && email.value.trim().includes("."))){

                        email.focus();
                        email.style.borderColor = "#f8020f";
                        email.nextElementSibling.style.display = "block";
                        email.nextElementSibling.innerText = "Please enter your valid email id.";
                        return;
                    }else{

                        email.style.borderColor = "var(--shadow-color)";
                        email.nextElementSibling.style.display = "none";
                    }
                    
                    // Validation for phone number
                    const phone = event.target.phone;
                    if(phone.value.trim() == ""){

                        phone.focus();
                        phone.style.borderColor = "#f8020f";
                        phone.nextElementSibling.style.display = "block";
                        phone.nextElementSibling.innerText = "Phone number is required. Please enter your phone number.";
                        return;
                    }else if(phone.value.length > 10 || phone.value.length < 10 ){

                        phone.focus();
                        phone.style.borderColor = "#f8020f";
                        phone.nextElementSibling.style.display = "block";
                        phone.nextElementSibling.innerText = "Please enter your valid phone number.";
                        return;
                    }else{

                        phone.style.borderColor = "var(--shadow-color)";
                        phone.nextElementSibling.style.display = "none";
                    }

                    // Validation for countary
                    const countary = event.target.countary;
                    if(countary.value.trim() == "" || countary.value.trim() != "India"){

                        countary.focus();
                        countary.style.borderColor = "#f8020f";
                        countary.nextElementSibling.style.display = "block";
                        countary.nextElementSibling.innerText = "Only for India.";
                        return;
                    }else if(countary.value.length > 10 ){

                        countary.focus();
                        countary.style.borderColor = "#f8020f";
                        countary.nextElementSibling.style.display = "block";
                        countary.nextElementSibling.innerText = "Only for India.";
                        return;
                    }else{

                        countary.style.borderColor = "var(--shadow-color)";
                        countary.nextElementSibling.style.display = "none";
                    }

                    // Validation for state
                    const state = event.target.state;
                    if(state.value.trim() == ""){

                        state.focus();
                        state.style.borderColor = "#f8020f";
                        state.nextElementSibling.style.display = "block";
                        state.nextElementSibling.innerText = "State is required. Please select your state.";
                        return;
                    }else if(state.value.length > 100 ){

                        state.focus();
                        state.style.borderColor = "#f8020f";
                        state.nextElementSibling.style.display = "block";
                        state.nextElementSibling.innerText = "State name must be less then 100 characters.";
                        return;
                    }else{

                        state.style.borderColor = "var(--shadow-color)";
                        state.nextElementSibling.style.display = "none";
                    }

                    // Validation for district
                    const district = event.target.district;
                    if(district.value.trim() == ""){

                        district.focus();
                        district.style.borderColor = "#f8020f";
                        district.nextElementSibling.style.display = "block";
                        district.nextElementSibling.innerText = "district is required. Please select your district.";
                        return;
                    }else if(district.value.length > 100 ){

                        district.focus();
                        district.style.borderColor = "#f8020f";
                        district.nextElementSibling.style.display = "block";
                        district.nextElementSibling.innerText = "district name must be less then 100 characters.";
                        return;
                    }else{

                        district.style.borderColor = "var(--shadow-color)";
                        district.nextElementSibling.style.display = "none";
                    }
                    
                    // Validation for pincode
                    const pincode = event.target.pincode;
                    if(pincode.value.trim() == ""){

                        pincode.focus();
                        pincode.style.borderColor = "#f8020f";
                        pincode.nextElementSibling.style.display = "block";
                        pincode.nextElementSibling.innerText = "pincode is required. Please select your pincode.";
                        return;
                    }else if(pincode.value.length > 6 || pincode.value.length < 6 ){

                        pincode.focus();
                        pincode.style.borderColor = "#f8020f";
                        pincode.nextElementSibling.style.display = "block";
                        pincode.nextElementSibling.innerText = "Please enter your valid 6 digits pin code.";
                        return;
                    }else{

                        pincode.style.borderColor = "var(--shadow-color)";
                        pincode.nextElementSibling.style.display = "none";
                    }

                    // Validation for district
                    const famous_place = event.target.famous_place;
                    if(famous_place.value.trim() == ""){

                        famous_place.focus();
                        famous_place.style.borderColor = "#f8020f";
                        famous_place.nextElementSibling.style.display = "block";
                        famous_place.nextElementSibling.innerText = "famous Place is required.";
                        return;
                    }else if(famous_place.value.length > 255 ){

                        famous_place.focus();
                        famous_place.style.borderColor = "#f8020f";
                        famous_place.nextElementSibling.style.display = "block";
                        famous_place.nextElementSibling.innerText = "Famous place name must be less then 255 characters.";
                        return;
                    }else{

                        famous_place.style.borderColor = "var(--shadow-color)";
                        famous_place.nextElementSibling.style.display = "none";
                    }
                    
                    // Validation for district
                    const delivery_address = event.target.delivery_address;
                    if(delivery_address.value.trim() == ""){

                        delivery_address.focus();
                        delivery_address.style.borderColor = "#f8020f";
                        delivery_address.nextElementSibling.style.display = "block";
                        delivery_address.nextElementSibling.innerText = "Please enter your delivery address.";
                        return;
                    }else if(delivery_address.value.length > 500 ){

                        delivery_address.focus();
                        delivery_address.style.borderColor = "#f8020f";
                        delivery_address.nextElementSibling.style.display = "block";
                        delivery_address.nextElementSibling.innerText = "Delivery address must be less then 500 characters.";
                        return;
                    }else{

                        delivery_address.style.borderColor = "var(--shadow-color)";
                        delivery_address.nextElementSibling.style.display = "none";
                    }

                    // Get the form data
                    let form_data = new FormData(this);
                    // Logic to make request
                    $.ajax({
                        url: "{{ route("user.update_profile_info_request") }}",
                        type: "POST",
                        data: form_data,
                        dataType: "json",
                        contentType: false,
                        processData: false,
                        success: function(resp){

                            // console.log(resp)
                            
                            if(resp.status == "success"){
                                Swal.fire({
                                    title: "Success",
                                    text: "Profile updated successfully.",
                                    icon: "success"
                                });

                                window.location.relode();
                                
                            }else if(resp.state == "error"){
                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: "Unable to update records. Please try again latter!",
                                }); 
                            }
                        },
                        error: function(resp){
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Something went wrong. Try again latter!",
                            }); 
                        }
                    });
                    
                });

                // Logic to check step 3 is compleated or not when user click on step 4
                $("#checkbox5").on("click", function(){

                    if($("#checkbox4").val().trim().toLowerCase() == "compleated"){
                        
                        $("#checkbox5").attr("checked", true);
                    }else{

                        $("#checkbox5").attr("checked", false);
                        $("#checkbox4").attr("checked", true);
                        Swal.fire({
                            title: "Step 3: Delivery Details.",
                            text: "Please enter your delivery details.",
                            icon: "warning",
                        });
                    }
                });

                // Logic to make a ajax request for payment processing
                $("#place_order_form").on("submit", function(event){

                    event.preventDefault();

                    // Logic to check delivery details is enter or not
                    if($("#checkbox4").val().trim().toLowerCase() == "compleated"){
                        
                        $("#checkbox5").attr("checked", true);
                    }else{

                        $("#checkbox5").attr("checked", false);
                        $("#checkbox4").attr("checked", true);
                        Swal.fire({
                            title: "Step 3: Delivery Details.",
                            text: "Please enter your delivery details.",
                            icon: "warning",
                        });
                        return;
                    }
                    
                    // Get the form data
                    const form_data = new FormData(this);
                    // Make a request
                    $.ajax({
                        url: "{{ route("product.orders.order_request") }}",
                        type: "POST",
                        dataType: "json",
                        data: form_data,
                        contentType: false,
                        processData: false,

                        success: function(resp){
                            
                            // Logic to check payment request is success or not if payment request is unsuccess then show error and return  back
                            if(resp.status == "error"){
                                Swal.fire({
                                    title: "Error !",
                                    text: "Unable to payment. Please try again latter.",
                                    icon: "error",
                                });
                                return;
                            }
                            
                            // Logic to make a ajax request for payment callback
                            var options = {

                                "key": resp.RZP_KEY_ID,
                                "amount": resp.current_payment*100,
                                "currency": "INR",
                                "name": "IT CARE LAPPY WALA",
                                "description": "IT CARE LAPPY WALA",
                                "image": "{{ asset('assets/img/logo.png') }}",
                                "order_id": resp.order_id,
                                "handler": function (response){
                                    const razorpay_payment_id = response.razorpay_payment_id;
                                    const razorpay_order_id = response.razorpay_order_id;

                                    // Logic to handle a ajax request for payment callback
                                    $.ajax({
                                        url: "{{ route("product.orders.payment_callback") }}",
                                        type: "POST",
                                        headers: {
                                            "X-CSRF-TOKEN":  $('meta[name="csrf-token"]').attr('content'),
                                        },
                                        dataType: "json",

                                        data: {
                                            "razorpay_payment_id": razorpay_payment_id,
                                            "razorpay_order_id": razorpay_order_id
                                        },

                                        success: function(respon){
                                            
                                            if(respon.status == "success"){

                                                Swal.fire({
                                                    title: "Success",
                                                    text: "Payment successfull",
                                                    icon: "success",
                                                });

                                                window.location.href = "{{ route("pages.my-orders") }}";
                                                
                                            }else if(respon.status == "error"){
                                                Swal.fire({
                                                    title: "Payment request failed !",
                                                    text: "Unable to payment. Please try again latter.",
                                                    icon: "error",
                                                });
                                            }else{
                                                Swal.fire({
                                                    title: "Payment request failed !",
                                                    text: "Something went wrong. Please try again latter.",
                                                    icon: "error",
                                                }); 
                                            }
                                        },

                                        error: function(respon){
                                          
                                            
                                            // console.log("err22"+respon);
                                            // return;
                                            
                                            Swal.fire({
                                                title: "Payment request failed !",
                                                text: "Something went wrong. Please try again latter. 2",
                                                icon: "error",
                                            });
                                        }


                                    });
                                    
                                },
                                "prefill": {
                                    "name": resp.usr_name,
                                    "email": resp.usr_email, 
                                    "contact": resp.usr_phone
                                },
                                "notes": {
                                    "address": "IT CARE LAPPY WALA Corporate Office"
                                },
                                "theme": {
                                    "color": "#3399cc"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.open();
                            
                        },

                        error: function(resp){
                            
                            Swal.fire({
                                title: "Payment request failed !",
                                text: "Something went wrong. Please try again latter. 1",
                                icon: "error",
                            });
                        }
                    });
                });
                                
            });
        </script>
    </body>
</html>