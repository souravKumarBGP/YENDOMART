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
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/otp_verify.css") }}" />
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
            
            <!---=============== Start otp verification section =============-->
            <section class="otp_verify">

                <div class="container">
                    <div class="row align-items-center">

                        {{-- {{ Auth::user() }} --}}
                        
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="img_box">
                                <img src="{{ asset("assets/img/otp.png") }}" alt="">
                            </div>
                        </div><!--./img_box-->

                        <div class="p-0 px-md-2col-12 col-lg-6">

                            <div class="otp_box d-flex align-items-center flex-column justify-content-center">
                                <div class="box">

                                    <h4><b>OTP Verification</b></h4>
                                    <p>Enter the 6-digit OTP sent to your email:  
                                        @if(session("e"))
                                            <a href="https://mail.google.com/mail/u/0/" target="_blank" style="color: #3769fe; text-decoration: underline; font-width: 600;">{{ base64_decode(session("e")) }}</a>
                                        @endif
                                    </p>                     
                                    <div id="timer">Time remaining: <span>3:00</span></div>
                                    <br/>
                                    <div class="otp-input">
                                        <input type="number" min="0" max="9" required>
                                        <input type="number" min="0" max="9" required>
                                        <input type="number" min="0" max="9" required>
                                        <input type="number" min="0" max="9" required>
                                        <input type="number" min="0" max="9" required>
                                        <input type="number" min="0" max="9" required>
                                    </div>
                                    <br/><br/>

                                    <small>Don't recevid OTP Code ? 
                                        <button class="btn" id="resendButton" onclick="resendOTP()" disabled>Resend Code</button>
                                    </small>
                                    <br/><br/>
                                    
                                    <button class="btn verify_btn" onclick="verifyOTP()">Verify</button>
                                    <br><br>
                                    <small><a href="tel:7763999333" target="_blank">+91 7763999333</a></small>
                                </div><!--./box-->
                            </div>
                            
                        </div>
                        
                    </div><!--./row-->
                </div><!--./container-->
                
                
            </section><!--./otp_verify-->
            
        </main><!--./main-->
        
        <!--================================== Start Footer section ===============================-->
        @include("layoutes.footer")
        <!--./footer-->

        <!--================================== internal file link's ===============================-->
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--================================== internal script writing ============================-->

        <script>

            // Logic to handle login with otp operations
            const inputs = document.querySelectorAll('.otp-input input');
            const timerDisplay = document.getElementById('timer');
            const resendButton = document.getElementById('resendButton');
            let timeLeft = 180; // 3 minutes in seconds
            let timerId;
            function startTimer() {
                timerId = setInterval(() => {
                    if (timeLeft <= 0) {
                        clearInterval(timerId);
                        timerDisplay.textContent = "Code expired";
                        resendButton.disabled = false;
                        inputs.forEach(input => input.disabled = true);
                    } else {
                        const minutes = Math.floor(timeLeft / 60);
                        const seconds = timeLeft % 60;
                        timerDisplay.textContent = `Time remaining: ${minutes}:${seconds.toString().padStart(2, '0')}`;
                        timeLeft--;
                    }
                }, 1000);
            }
            function resendOTP() {

                // Logic to make a ajax request to perform resent otp operations
                $(document).ready(function(){
                    
                    const _token = $('[name="csrf-token"]').attr("content");
                    
                    $.ajax({
                        type: "post",
                        url: "{{ route("user.resend_opt_request") }}",
                        headers: {
                            "X-CSRF-TOKEN": _token,
                        },
                        dataType: "json",

                        success: function(resp){

                            if(resp.status == "success"){
                                
                                Swal.fire({
                                    title: "Success",
                                    text: "New OTP send successfully. Please check your email id.",
                                    icon: "success"
                                });

                            }else{
                                
                                Swal.fire({
                                    icon: "error",
                                    title: "Error !",
                                    text: "Something went wrong. Please try again letter.",
                                });

                            }

                        },

                        error: function(resp){

                            Swal.fire({
                                icon: "error",
                                title: "Error !",
                                text: "Something went wrong. Please try again letter.",
                            });
                        }
                    });
                    
                });
                
                timeLeft = 180;
                
                inputs.forEach(input => {
                    input.value = '';
                    input.disabled = false;
                });
                resendButton.disabled = true;
                inputs[0].focus();
                clearInterval(timerId);
                startTimer();
            }
            inputs.forEach((input, index) => {
                input.addEventListener('input', (e) => {
                    if (e.target.value.length > 1) {
                        e.target.value = e.target.value.slice(0, 1);
                    }
                    if (e.target.value.length === 1) {
                        if (index < inputs.length - 1) {
                            inputs[index + 1].focus();
                        }
                    }
                });

                input.addEventListener('keydown', (e) => {
                    
                    if (e.key === 'Backspace' && !e.target.value) {
                        if (index > 0) {
                            inputs[index - 1].focus();
                        }
                    }
                    if (e.key === 'e') {
                        e.preventDefault();
                    }

                });
            });
            function verifyOTP(){
                const otp = Array.from(inputs).map(input => input.value).join('');

                // Logic to check otp is expired or not
                if(timeLeft > 0){
                    if(otp.length === 6){
                        
                        // Logic to make a ajax request to verify enter otp
                        $(document).ready(function(){

                            const _token = $('[name="csrf-token"]').attr("content");
                            
                            $.ajax({

                                type: "post",
                                url: "{{ route("user.otp_verification_request") }}",
                                headers: {
                                    "X-CSRF-TOKEN": _token,
                                    "contentType": "application/json"
                                },
                                dataType: "json",
                                data: {"otp": otp},

                                success: function(resp){

                                    if(resp.status == "veryfied"){
                                        
                                        Swal.fire({
                                            title: "Success",
                                            text: "OTP Veryfication successfully.",
                                            icon: "success"
                                        });

                                        if(resp.user == "admin_login"){
                                            window.location.href = "{{ route("admin.dashbord") }}";
                                            
                                        }else if(resp.user == "user_login"){
                                            
                                            window.location.href = "{{ route("home") }}";
                                        }

                                    }else if(resp.status == "wrong_otp"){
                                        
                                        Swal.fire({
                                            icon: "error",
                                            title: "Wrong OTP",
                                            text: "Please Enter the currect 6-digits OTP",
                                        });

                                    }else if(resp.status == "otp_expire"){
                                        
                                        Swal.fire({
                                            icon: "error",
                                            title: "OTP Expire",
                                            text: "OTP has been expired. Please resend the new OTP.",
                                        });

                                    }else if(resp.status == "invalid_credentials"){

                                        Swal.fire({
                                            icon: "error",
                                            title: "Invalid Credentials",
                                            text: "Credentials",
                                        });

                                    }else{
                                        
                                        Swal.fire({
                                            icon: "error",
                                            title: "Error !",
                                            text: "Unable to verify OTP. Please try again letter.",
                                        });

                                    }
                                    
                                },

                                error: function(resp){
                                    
                                    Swal.fire({
                                        icon: "error",
                                        title: "Error !",
                                        text: "Something went wrong. Please try again letter.",
                                    });
                                }

                            });
                            
                        });
                        

                    
                    }else{
                        Swal.fire({
                            icon: "error",
                            title: "Error !",
                            text: "Please enter 6-digits OTP.",
                        });
                    }
                    
                }else{
                    Swal.fire({
                        icon: "error",
                        title: "OTP Expire",
                        text: "OTP has been expired. Please resend the new OTP.",
                    });
                }
            }
            startTimer();

            $(document).ready(function(event){

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
            });
            
            
        </script>
        
    </body>
</html>