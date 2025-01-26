<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yendo Ecommerce | Logn And Signup | Online electronic shop</title>
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
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/signup_login.css") }}" />
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
            <div class="container pb-5">
                
                <!--====================== Start form_box section =====================-->
                <section class="form_box">
                    
                    <div class="heading">
                        <p>Login or Signup</p>
                    </div><!--./heading-->

                    <div class="row">

                        <div class="left col-12 col-md-5">
                            <form action="#" class="login_form" method="POST">

                                <div class="form_heading">
                                    <p>Login</p>
                                    <div class="line"></div>
                                </div><!--./form_heading-->

                                <p class="slogon">Welcome back! Sign in to your account.</p>

                                <div class="input_box">
                                    <label for="#login_email">Email Address <span style="color: #ff022c;">*</span></label>
                                    <input type="email" name="email" id="login_email" placeholder="Email address" />
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#login_email">Password <span style="color: #ff022c;">*</span></label>
                                    <input type="password" name="password" id="login_password" placeholder="Password" />
                                </div><!--./input_box-->

                                <button type="submit" class="submit_btn login_submit_btn btn">
                                    Login
                                </button><!--./submit_btn--><br/>

                                <a href="#" class="sub_link" target="_blank" onclick="return confirm('Are you sure you wnat to reset your password?')">Reset your password?</a>
                            </form>
                        </div><!--./left-->

                        <div class="middle d-none d-md-flex justify-content-center col-12 col-md-2">
                            <div class="line2"></div>
                            <div class="or_box">Or</div>
                        </div><!--./middle-->

                        <div class="right col-12 col-md-5">
                            <form action="#" class="signup_form" method="POST">
                                
                                <div class="form_heading">
                                    <p>Sign Up</p>
                                    <div class="line"></div>
                                </div><!--./form_heading-->

                                <p class="slogon">Create new account today to reap the benefits of a personalized shopping experience.</p>

                                <div class="input_box">
                                    <label for="#signup_email">Email Address<span style="color: #ff022c;">*</span></label>
                                    <input type="email" name="email" id="signup_email" placeholder="Email address" />
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#signup_password">Create Password <span style="color: #ff022c;">*</span></label>
                                    <input type="password" name="password" id="signup_password" placeholder="Password" />
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#confirm_pass">Confirm Password <span style="color: #ff022c;">*</span></label>
                                    <input type="password" name="conf_password" id="conf_password" placeholder="Same Password" />
                                </div><!--./input_box-->

                                <button type="submit" class="submit_btn signup_submit_btn btn">
                                    Submit
                                </button><!--./submit_btn--><br/>

                            </form>

                            <div class="text">
                                <p>Sign up today and you will be able to :</p>
                                <ul>
                                    <li class="d-flex align-items-start">
                                        <span class="icon">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                            </svg>                                              
                                        </span>
                                        Speed your way through checkout
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="icon">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                            </svg>                                              
                                        </span>
                                        Track your orders easily
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="icon">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                            </svg>                                              
                                        </span>
                                        Keep a record of all your purchases
                                    </li>
                                </ul>
                            </div>
                        </div><!--./right-->

                    </div>
                </section><!--./form_box-->
                
            </div><!--./container-->

            <!--================= Start get_update_section section ===============-->
            <section class="get_update_section">
                <div class="container">
                    <div class="row justify-content-center align-items-center" style="row-gap: var(--gap-20px);">
                        <div class="left col-12 col-lg-6">
                            <p>
                                Get Update And Cupan Code Of 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 20 13" style="margin-right: -15px;">
                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                </svg> 3,00
                            </p>
                        </div>
                        <div class="right col-12 col-lg-6 d-flex justify-content-end">
                            <form action="#" class="get_updates_form d-flex align-items-center" style="width: 100%;">
                                <input type="text" name="whatsappNo" id="whatsappNo" placeholder="Enter your whatsapp No..." />
                                <button class="btn d-flex align-items-center">
                                    Get Updates
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.464V3.099m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C19 17.4 19 18 18.462 18H5.538C5 18 5 17.4 5 16.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.464ZM6 5 5 4M4 9H3m15-4 1-1m1 5h1M8.54 18a3.48 3.48 0 0 0 6.92 0H8.54Z"/>
                                    </svg>                                      
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section><!--./get_update_section-->
        </main><!--./main-->
        
        <!--================================== Start Footer section ===============================-->
        @include("layoutes.footer")
        <!--./footer-->

        <!--================================== internal file link's ===============================-->
        {{-- <script src="{{ asset("assets/js/jquery.min.js") }}"></script> --}}
        <!--================================== internal script writing ============================-->
    </body>
</html>