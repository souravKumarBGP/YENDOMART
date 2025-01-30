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
                                        <a href="mailto:s@gmail.com" style="color: #3769fe; text-decoration: underline;">s@gmail.com</a>
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
                                        
                                        // Swal.fire({
                                        //     title: "Success",
                                        //     text: "OTP Veryfication successfully.",
                                        //     icon: "success"
                                        // });

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
            
        </script>
        
    </body>
</html>