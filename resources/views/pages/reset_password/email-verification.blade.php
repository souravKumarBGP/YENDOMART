<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Basic SEO Meta Tags -->
        <title>IT Care Lappy Wala - Best Refurbished Laptops Shop in Bhagalpur Bihar</title>
        <meta name="title" content="IT Care Lappy Wala Bhagalpur - Refurbished Laptop, Computer And Tablet Bhagalpur." />
        <meta name="description" content="Starting at ₹8,500! Get the best refurbished laptops, computers, mobiles & tablets at IT Care Lappy Wala. Quality tech at low prices. Visit our shop today!." />
        <meta name="keywords" content="It Care Lappy Wala, itcarelappywala.in, It Care Lappy Wala Shop, It Care Lappy Shop in Bhagalpur, Old Laptops Shop In Bhagalpur, Old Laptop Shop in Bihar, It Care Lappy Wala Laptops Shop in Bhagalpur, it care lappy wala bhagalpur" />
        <meta name="author" content="IT Care Lappy Wala" />
        <link rel="canonical" href="https://itcarelappywala.in" />
        <!-- Open Graph Meta Tags for Social Media -->
        <meta property="og:title" content="IT Care Lappy Wala - Old Laptop And Computer Shop in Bhagalpur." />
        <meta property="og:description" content="Starting at ₹8,500! Get the best refurbished laptops, computers, mobiles & tablets at IT Care Lappy Wala. Quality tech at low prices. Visit our shop today!." />
        <meta property="og:image" content="https://itcarelappywala.in/assets/img/shop.jpg" />
        <meta property="og:url" content="https://itcarelappywala.in" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="IT Care Lappy Wala" />
        <meta property="og:locale" content="en_IN" />
        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@ITCareLappyWala" />
        <meta name="twitter:title" content="IT Care Lappy Wala - Old Laptop And Computer Shop in Bhagalpur" />
        <meta name="twitter:description" content="Starting at ₹8,500! Get the best refurbished laptops, computers, mobiles & tablets at IT Care Lappy Wala. Quality tech at low prices. Visit our shop today!." />
        <meta name="twitter:image" content="https://itcarelappywala.in/assets/img/shop.jpg" />
        <!-- Meta og for microsoft app -->
        <meta name="msapplication-TileImage" content="{{ asset("assets/img/favicon/favicon.svg") }}" />
        <!-- Meta og image to display -->
        <meta property="og:image" itemprop="image" content="{{ asset("assets/img/favicon/favicon.svg") }}" />
        <!-- Any size up to 300. Anything above 300px will not work in whatsApp -->
        <meta property="og:image:width" content="300" />
        <meta property="og:image:height" content="300" />
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset("assets/img/favicon/favicon-96x96.png") }}" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="{{ asset("assets/img/favicon/favicon.svg") }}" />
        <link rel="shortcut icon" href="{{ asset("assets/img/favicon/favicon.ico") }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/img/favicon/apple-touch-icon.png") }}" />
        <meta name="apple-mobile-web-app-title" content="IT Care Lappy Wala" />
        <link rel="manifest" href="{{ asset("assets/img/favicon/site.webmanifest") }}" />
        <!-- Mobile Theme Color -->
        <meta name="theme-color" content="#fed700" />
        <!-- IE Compatibility -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Robots Meta Tag -->
        <meta name="robots" content="index, follow" />
        <!-- Additional SEO Meta Tags -->
        <meta name="geo.region" content="IN-BR" />
        <meta name="geo.placename" content="Bhagalpur" />
        <meta name="geo.position" content="25.2425;87.0169" />
        <meta name="ICBM" content="25.2425, 87.0169" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!--================================== External file link's ===============================-->
        <link href="{{ asset("assets/css/frontend/bootstrap-grid.min.css") }}" rel="stylesheet" />
        <!--================================== Internal file link's ===============================-->
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/common.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/navbar.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/footer.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/reset_password/email-veryfication.css") }}" />
        
    </head>
    <body>
        <!--================================== Start header section ===============================-->
        <header>
            <!--=================== Start navbar section ==================-->
            @include("layoutes.navbar")
            <!--./nav-->
        </header><!--./header-->

        <!--================================== Start header section ===============================-->
        <main>

            @session('success_msg')
                <x-success_msg>
                    <x-slot name="msg">
                        {{ session("success_msg") }}
                    </x-slot>
                </x-success_msg>
            @endsession

            @session('error_msg')
                <x-error_msg>
                    <x-slot name="msg">
                        {{ session("error_msg") }}
                    </x-slot>
                </x-error_msg>
            @endsession
            
            <!--==================== Start my_cart_box section ===================-->
            <section class="email_verifycation_section">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 mx-auto border2">
                            
                            <div class="form_box">

                                <div class="form_heading">
                                    Veify Your Email ID
                                </div>
                                
                                <form action="{{ route("page.email_veryfication_request") }}" method="POST" class="email_verify_form">

                                    @method("POST")
                                    @csrf
                                    
                                    <div class="input_box">
                                        <label for="email">Email ID</label>
                                        <input type="email" id="email" name="email" value="{{ old("email") }}" />

                                        @error('email')
                                            <small class="error d-block mt-1">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button class="btn verify_btn">VERIFY NOW</button>
                                    <br/><br/>
                                    <a href="{{ route("pages.signup_login_page") }}" class="sub_link" target="_blank">Login Now</a>
                                </form>
                            </div><!--./form_box-->
                            
                        </div>
                    </div>
                </div>
                
            </section><!--./email_verifycation_section-->

            
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
        
    </body>
</html>