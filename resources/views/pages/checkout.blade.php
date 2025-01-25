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

                            <div class="link login_link">
                                <button class="p-1 py-0 btn" style="margin-top: 1px;">1</button>
                                New customer? 
                                <b>
                                    <input type="checkbox" id="checkbox1">
                                    Click here to signup
                                </b>
                            </div><!--./login_link-->
                            
                            <div class="form_box">
                                <form action="#">
                                    <small>Hellow ! Welcome to my yendo electronic shop.</small>
                                    <br/>
                                    <small>If you have shopped with us before, please enter your details below. If you are a new customer, please create your account.</small>
                                    <br/><br/>

                                    <div class="input_box d-flex gap-15px">

                                        <div class="item d-flex flex-column">
                                            <label for="log_pass">Name <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="s_name" name="name" placeholder="Name" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="s_email">Email Id <small style="color: #fd4747;">*</small></label>
                                            <input type="email" id="s_email" name="email" placeholder="Email Id" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->
                                    

                                    <div class="input_box d-flex gap-15px mt-4">

                                        <div class="item d-flex flex-column">
                                            <label for="c_password">Create password <small style="color: #fd4747;">*</small></label>
                                            <input type="password" id="c_password" name="password" placeholder="Password" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="conf_pass">Confirm password <small style="color: #fd4747;">*</small></label>
                                            <input type="password" id="conf_pass" name="conf_pass" placeholder="Same password" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->
                                    

                                    <button class="login_btn btn" type="submit">Signup</button>
                                    <br/>
                                    
                                </form>
                            </div><!--./form_box-->

                        </section><!--./login_link_section-->
                        
                        
                        <!--==================== Start login_link_section ===================-->
                        <section class="login_link_section mt-4">

                            <div class="link login_link">
                                <button class="p-1 py-0 btn" style="margin-top: 1px;">2</button>
                                Returning customer? 
                                <b>
                                    <input type="checkbox" id="checkbox1">
                                    Click here to login
                                </b>
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
                        
                        <!--==================== Start login_link_section ===================-->
                        <section class="bill_details mt-4">

                            <div class="link">
                                <button class="p-1 py-0 btn" style="margin-top: 1px;">3</button>
                                Enter your delivery details
                                <b>
                                    <input type="checkbox" id="checkbox4">
                                    Click here to enter
                                </b>
                            </div><!--./login_link-->
                            
                            <div class="form_box">
                                <form action="#">
                                    <small>Enter your details.</small>
                                    <br/><br/>

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="email">Name <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="name" name="name" placeholder="Name" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="email">Email Id <small style="color: #fd4747;">*</small></label>
                                            <input type="email" id="email" name="email" placeholder="Email Id" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="phone">Phone No <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="phone" name="phone" placeholder="Phone No" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="countary">Countary <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="countary" name="countary" value="India" placeholder="Countary" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="state">State <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="state" name="state" placeholder="State" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="district">District <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="district" name="district" value="India" placeholder="District" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->

                                    <div class="input_box d-flex gap-15px mt-3">

                                        <div class="item d-flex flex-column">
                                            <label for="pincode">Pin Code <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="pincode" name="pincode" placeholder="Pincode" />
                                        </div><!--./item-->

                                        <div class="item d-flex flex-column">
                                            <label for="famousPlace">Famous Place <small style="color: #fd4747;">*</small></label>
                                            <input type="text" id="famousPlace" name="famousPlace" value="India" placeholder="Famous place" />
                                        </div><!--./item-->
                                        
                                    </div><!--./input_box-->
                                    
                                </form>
                            </div><!--./form_box-->

                        </section><!--./login_link_section-->
                        
                        <!--==================== Start login_link_section ===================-->
                        <section class="payment_option mt-4">

                            <div class="link">
                                <button class="p-1 py-0 btn" style="margin-top: 1px;">4</button>
                                Payment Option
                                <b>
                                    <input type="checkbox" id="checkbox5">
                                    Click here to check
                                </b>
                            </div><!--./login_link-->
                            
                            <div class="form_box">
                                <div class="row pt-4" style="height: 100%;">
                                    
                                    <div class="left col-12 col-lg-8">
                                        <ul>
                                            <li class="d-flex align-items-center justify-content-between mb-3" style="border-bottom: 0.5px solid #8080802a;">
                                                <img src="{{ asset("assets/img/computer.png") }}" alt="">
                                                <p class="product_name">Ultra Wireless S50 Headphones S50 with Bluetooth × 1</p>
                                                <p class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                        <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                    </svg>
                                                    <b>40000</b>
                                                </p>
                                            </li>
                                        </ul>
                                    </div><!--./left-->

                                    <div class="right col-12 col-lg-4">
                                        
                                        <form action="#">
                                            <ul>
                                                <li>
                                                    <span>Total Amount</span>
                                                    <b>2400322</b>
                                                </li>
                                                <li>
                                                    <span>Delivery Charges</span>
                                                    <b>0322</b>
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
                                                    <input type="radio" name="payment_mode"  id="cod" value="cod" />
                                                    <label for="cod">Cash on dilevery</label>
                                                </div>
                                                <div class="d-flex align-items-center mb-1" style="gap: 7px;">
                                                    <input type="radio" name="payment_mode" id="current_pay" value="current_pay" />
                                                    <label for="current_pay">Current Payment</label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn place_oder_btn">
                                                Place Order
                                            </button>
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

        <!--================================== internal file link's ===============================-->
        {{-- <script src="{{ asset("assets/js/jquery.min.js") }}"></script> --}}
        <!--================================== internal script writing ============================-->
        <script>

            // Logic to perform active and disactive my_cart_list_box and my_account_setting_boxs
            function unchecked() {
                document.querySelectorAll(".activ_disactive_checkbox").forEach((item) => {
                    item.checked = false;
                });
            }
            document.querySelectorAll(".activ_disactive_checkbox").forEach((checkbox) => {
                checkbox.addEventListener("click", (event) => {
                    if (!event.target.checked) {
                        event.target.checked = false;
                    } else {
                        unchecked();
                        event.target.checked = true;
                    }
                });
            });

            // Logic to show product name in ellipsis format
            document.querySelectorAll(".p_name").forEach((item, ind) => {
                let text = item.textContent.trim();
                if (text.length > 60) {
                    let truncatedText = text.slice(0, 60) + "...";
                    item.textContent = truncatedText;
                }
            });


        </script>
    </body>
</html>