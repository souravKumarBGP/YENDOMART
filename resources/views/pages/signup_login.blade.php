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
                
                <!--====================== Start form_box section =====================-->
                <section class="form_box">
                    
                    <div class="heading">
                        <p>Login or Signup</p>
                    </div><!--./heading-->

                    <div class="row">

                        <div class="left col-12 col-md-5">

                            <form action="{{ route("user.login_request") }}" class="login_form" method="POST">
                                @csrf
                                @method("POST")

                                <div class="form_heading">
                                    <p>Login</p>
                                    <div class="line"></div>
                                </div><!--./form_heading-->

                                <p class="slogon">Welcome back! Login in to your account.</p>

                                <div class="input_box">
                                    <label for="login_email">Email Address <span style="color: #ff022c;">*</span></label>
                                    <input type="email" name="email" value="{{ old("email") }}" id="login_email" autocomplete="on" placeholder="Email address" />

                                    @error("email")
                                        <small class="error d-block">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="login_password">Password <span style="color: #ff022c;">*</span></label>
                                    <input type="password" name="password" autocomplete="off" id="login_password" placeholder="Password" />

                                    @error("password")
                                        <small class="error d-block">{{ $message }}</small>
                                    @enderror
                                </div><!--./input_box-->

                                <button type="submit" class="submit_btn login_submit_btn btn">
                                    Login
                                </button><!--./submit_btn--><br/>

                                <a href="{{ route("pages.email-verifycation-page") }}" class="sub_link" target="_blank" onclick="return confirm('Are you sure you wnat to reset your password?')">Reset your password?</a>
                            </form>
                        </div><!--./left-->

                        <div class="middle d-none d-md-flex justify-content-center col-12 col-md-2">
                            <div class="line2"></div>
                            <div class="or_box">Or</div>
                        </div><!--./middle-->

                        <div class="right col-12 col-md-5">
                            <form action="{{ route("user.store") }}" class="signup_form" method="POST">
                                @csrf
                                @method("POST")
                                
                                <div class="form_heading">
                                    <p>Sign Up</p>
                                    <div class="line"></div>
                                </div><!--./form_heading-->

                                <p class="slogon">Create new account today to reap the benefits of a personalized shopping experience.</p>

                                <div class="input_box">
                                    <label for="#signup_name">Full name<span style="color: #ff022c;">*</span></label>
                                    <input type="text" name="full_name" id="signup_name" placeholder="Full name" />

                                    <small class="error">
                                        Please enter your full name.
                                    </small><!--./error-->

                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#signup_email">Email Address<span style="color: #ff022c;">*</span></label>
                                    <input type="email" name="email" id="signup_email" placeholder="Email address" />

                                    <small class="error">
                                        Please enter your email id.
                                    </small><!--./error-->
                                    
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#signup_password">Create Password <span style="color: #ff022c;">*</span></label>
                                    <input type="password" name="password" id="signup_password" placeholder="Password" />

                                    <small class="error">
                                        Please create your new password.
                                    </small><!--./error-->
                                    
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#confirm_pass">Confirm Password <span style="color: #ff022c;">*</span></label>
                                    <input type="password" name="conf_password" id="conf_password" placeholder="Same Password" />

                                    <small class="error">
                                        Please enter same password.
                                    </small><!--./error-->
                                    
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#confirm_pass">Profile Image (PNG, JPG) <span style="color: #ff022c;">*</span></label>
                                    <input type="file" name="profile_img" id="profile_img" />

                                    <small class="error">
                                        Please uploade your profile image.
                                    </small><!--./error-->
                                    
                                </div><!--./input_box-->

                                <button type="submit" class="submit_btn signup_submit_btn btn d-flex align-items-center">
                                    Submit
                                    <div class="spinner"></div>
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
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--================================== internal script writing ============================-->
        <script>

            $(document).ready(function(){

                // Logic to make a ajax request to stored new user
                $(".signup_form").on("submit", function(event){
                    event.preventDefault();

                    // =======================Logic to apply clint side validation
                    // validation for full name
                    if($("#signup_name").val().trim() == ""){
                        signup_name.style.borderColor = "#ff022c";
                        signup_name.focus();
                        signup_name.nextElementSibling.innerText = "Full name is required. Please provide your full name.";
                        signup_name.nextElementSibling.style.display = "block";
                        return false;
                    }else if($("#signup_name").val().trim().length > 100){
                        signup_name.style.borderColor = "#ff022c";
                        signup_name.focus();
                        signup_name.nextElementSibling.innerText = "Your full name cannot exceed 100 characters. Please use a shorter name.";
                        signup_name.nextElementSibling.style.display = "block";
                        return false;
                    }else{
                        signup_name.style.borderColor = "var(--shadow-color)";
                        signup_name.nextElementSibling.style.display = "none"; 
                    }

                    // Validation for email id
                    if($("#signup_email").val().trim() == ""){
                        signup_email.style.borderColor = "#ff022c";
                        signup_email.focus(),
                        signup_email.nextElementSibling.innerText = "Email address is required. Please enter a valid email address.";
                        signup_email.nextElementSibling.style.display = "block";
                        return false;
                    }else if($("#signup_email").val().trim().length > 100){
                        signup_email.style.borderColor = "#ff022c";
                        signup_email.focus();
                        signup_email.nextElementSibling.innerText = "Email address cannot exceed 100 characters. Please use a shorter email address.";
                        signup_email.nextElementSibling.style.display = "block";
                        return false;
                    }else if(!($("#signup_email").val().includes("@") && $("#signup_email").val().trim().includes("."))){
                        signup_email.style.borderColor = "#ff022c";
                        signup_email.focus();
                        signup_email.nextElementSibling.innerText = " Please enter your valid email id.";
                        signup_email.nextElementSibling.style.display = "block";
                        return false;
                    }else{
                        signup_email.style.borderColor = "var(--shadow-color)";
                        signup_email.nextElementSibling.style.display = "none";
                    }

                    // validation for create password
                    if($("#signup_password").val().trim() == ""){
                        signup_password.style.borderColor = "#ff022c";
                        signup_password.focus();
                        signup_password.nextElementSibling.innerText = "A password is required. Please create a new password.";
                        signup_password.nextElementSibling.style.display = "block";
                        return false;
                    }else if($("#signup_password").val().trim().length > 100 ||  $("#signup_password").val().trim().length < 8){
                        signup_password.style.borderColor = "#ff022c";
                        signup_password.focus();
                        signup_password.nextElementSibling.innerText = "Password must be between 8 and 100 characters long.";
                        signup_password.nextElementSibling.style.display = "block";
                        return false;
                    }else{
                        signup_password.style.borderColor = "var(--shadow-color)";
                        signup_password.nextElementSibling.style.display = "none";
                    }
                    
                    // validation for create password
                    if($("#conf_password").val().trim() == ""){
                        conf_password.style.borderColor = "#ff022c";
                        conf_password.focus();
                        conf_password.nextElementSibling.innerText = "Confirm password is required. Please enter the same password.";
                        conf_password.nextElementSibling.style.display = "block";
                        return false;
                    }else if(!($("#conf_password").val() == $("#signup_password").val())){
                        conf_password.style.borderColor = "#ff022c";
                        conf_password.focus();
                        conf_password.nextElementSibling.innerText = "Please enter the same password.";
                        conf_password.nextElementSibling.style.display = "block";
                        return false;
                    }else{
                        conf_password.style.borderColor = "var(--shadow-color)";
                        conf_password.nextElementSibling.style.display = "none";
                    }

                    // validation for profile image
                    const profile_img = document.querySelector("#profile_img");
                    const file = profile_img.files[0];
                    if(!file){
                        profile_img.style.borderColor = "#ff022c";
                        profile_img.nextElementSibling.style.display = "block";
                        profile_img.nextElementSibling.innerText = "A profile image is required. Please upload your profile image."
                        return false;
                    }else if(file.size > 1000000){
                        profile_img.style.borderColor = "#ff022c";
                        profile_img.nextElementSibling.style.display = "block";
                        profile_img.nextElementSibling.innerText = "The profile image size cannot exceed 1MB. Please upload a smaller image.";
                        return false;
                    }else if(file.type != "image/jpeg" && file.type != "image/png" && file.type != "jpg"){
                        profile_img.style.borderColor = "#ff022c";
                        profile_img.nextElementSibling.style.display = "block";
                        profile_img.nextElementSibling.innerText = "The profile image must be in JPG, JPEG, or PNG format.";
                        return false;
                    }else{
                        profile_img.style.borderColor = "var(--shadow-color)";
                        profile_img.nextElementSibling.style.display = "none";
                    }

                    // Show the loader
                    $(".spinner").show();
                    
                    // logic to make request
                    const form_data = new FormData(this);
                    $.ajax({
                        url: "{{ route("user.store") }}",
                        type: "POST",
                        dataType: "json",
                        data: form_data,
                        contentType: false,
                        processData: false,
                        
                        // handle the success response
                        success: function(resp){

                            if(resp.status == "success"){
                                
                                event.target.reset();
                                $(".spinner").hide();
                                Swal.fire({
                                    title: "User Created",
                                    text: "The user has been created successfully.",
                                    icon: "success",
                                });
                            }else if(resp.status == "email_exist"){
                                
                                signup_email.style.borderColor = "#ff022c";
                                signup_email.focus();
                                signup_email.nextElementSibling.innerText = "Email has been already taken. Please enter another email id.";
                                signup_email.nextElementSibling.style.display = "block";
                                
                                $(".spinner").hide();
                                Swal.fire({
                                    title: "Email exist",
                                    text: "This email has been already taken. Please enter another email id.",
                                    icon: "error",
                                });
                            }else{
                                
                                $(".spinner").hide();
                                Swal.fire({
                                    title: "Error",
                                    text: "Unable to create user. Please try again.",
                                    icon: "error",
                                });
                            }
                        },

                        // handle the error response
                        error: function(resp){

                            $(".spinner").hide();
                            Swal.fire({
                                title: "Error",
                                text: "Something went wrong. Please try again later.",
                                icon: "error",
                            });
                        }
                    });

                });

                // Logic to hide error message when user focus on input feild
                $(".signup_form :is(input, select, textarea)").each((ind, item)=>{
                    item.addEventListener("click", (event)=>{
                        event.target.nextElementSibling.style.display = "none";
                        event.target.style.borderColor = "var(--shadow-color)";
                    });
                });

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
                            console.log(resp);
                        }

                    });
                });
            });
        </script>
    </body>
</html>