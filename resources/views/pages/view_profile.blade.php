<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yendo Ecommerce |View-Profile| Online electronic shop</title>
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
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/view-profile.css") }}" />
    </head>
    <body>

        <!--================================== Start header section ===============================-->
        <header>
            <!--=================== Start navbar section ==================-->
            @include("layoutes.navbar")
            <!--./nav-->
        </header><!--./header-->

        <!--================================== Start Main section =================================-->
        <main>
            
            <!--==================== Start view_profile section ===================-->
            <section class="view_profile">

                <div class="container">
                    <div class="row p-4" style="background: var(--forth-color);">

                        <div class="heading">
                            <p>My Account</p>
                        </div>
                        
                        <div class="col-12 col-md-4">
                            <div class="left">

                                <div class="img_box">

                                    <div class="box">
                                        <img class="image" src="{{ asset("storage/".Auth::user()->profile_img) }}" alt="">
                                        <div class="spinner_box">
                                            <div class="spinner"></div>
                                        </div>
                                    </div><!--./box-->
                                    
                                    <div class="profile_img_box d-flex align-items-center justify-content-center">
                                        <button class="btn">Update Photo</button>
                                        <form action="{{ route("user.update_profile_image_request") }}" class="profile_img_form" enctype="multipart/form-data">
                                            @csrf
                                            @method("POST")
                                            <input type="file" name="profile_img" id="profile_img" />

                                            <small class="error">
                                                Please select your profile image.
                                            </small>
                                        </form>
                                    </div><!--./profile_img_box-->

                                    <form action="{{ route("user.update_password_request") }}" method="POST" class="pssword_form">

                                        @csrf
                                        @method("POST")

                                        <div class="input_box">
                                            <label for="old_pass">Old Password</label>
                                            <input type="Password" disabled id="old_pass" value="********"/>
                                        </div><!--./input_box-->

                                        <div class="input_box">
                                            <label for="new_pass">New Password</label>
                                            <input type="Password" name="password" id="new_pass" placeholder="Enter new password" />
                                            
                                            <small class="error" style="text-align: left; margin-top: 2px;">
                                                Please enter the new password.
                                            </small>
                                        </div><!--./input_box-->

                                        <button class="btn change_pass_submit_btn" type="submit">
                                            Change Password
                                        </button>
                                        
                                    </form><!--./password_form-->
                                </div><!--./img_box-->

                            </div>
                        </div><!--./left-->
                        
                        <div class="col-12 col-md-8">
                            <div class="right pb-0">
    
                                <form action="{{ route("user.update_profile_info_request") }}" class="profile_form" id="contactus_form" method="POST" autocomplete="on">
    
                                    @csrf
                                    @method("POST")
                                    
                                    <div class="form_heading">
                                        <p>Profile information</p>
                                        <div class="line"></div>
                                    </div><!--./form_heading-->
                                    <br/>
    
                                    <div class="input_label m-0 mt-1">
                                        
                                        <div class="row p-0 m-0 mb-md-2 px-0">
                                            <div class="col-12 col-lg-6 ps-0 mx-0">
                                                <div class="input_box mx-0 m-md-0">
                                                    <label for="full_name">Full name </label>
                                                    <input type="text" name="full_name" value="{{ Auth::user()->full_name }}" id="full_name" placeholder="Full name" />
                                                    
                                                    <small class="error">
                                                        Please enter your full name !
                                                    </small><!--./error-->
                                                    
                                                </div><!--./input_box-->
                                            </div>
        
                                            <div class="col-12 col-lg-6 ps-0 ps-lg-2 second">
                                                <div class="input_box m-0">
                                                    <label for="email">Email </label>
                                                    <input type="email" disabled name="email" value="{{ Auth::user()->email }}" id="email" placeholder="Email id" />
                                                    
                                                    <small class="error">
                                                        Please enter your email id !
                                                    </small><!--./error-->
    
                                                </div><!--./input_box-->
                                            </div>
                                        </div>
                                    </div><!--input_label-->
    
                                    <div class="input_label m-0">
                                        
                                        <div class="row p-0 m-0 mb-md-2 px-0">
                                            <div class="col-12 col-lg-6 ps-0 mx-0">
                                                <div class="input_box">
                                                    <label for="phone">Phone number </label>
                                                    <input type="text" name="phone" value="{{ Auth()->user()->phone }}" id="phone_number" placeholder="Phone number" />
                                                    
                                                    <small class="error">
                                                        Please enter your 10 digits phone number!
                                                    </small><!--./error-->
                                                </div><!--./input_box-->
                                            </div>
        
                                            <div class="col-12 col-lg-6 ps-0 ps-lg-2 second">
                                                <div class="input_box">
                                                    <label for="countary">Countary</label>
                                                    <input type="text" name="countary" disabled value="{{ Auth()->user()->countary }}" id="countary" placeholder="Countary" />
                                                    
                                                    <small class="error">
                                                        Please enter your countary!
                                                    </small><!--./error-->
                                                </div><!--./input_box-->
                                            </div>
                                        </div>
                                    </div><!--input_label-->
    
                                    <div class="input_label m-0">
                                        
                                        <div class="row p-0 m-0 mb-md-2 px-0">
                                            <div class="col-12 col-lg-6 ps-0 mx-0">
                                                <div class="input_box">
                                                    <label for="state">State</label>

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
                                                    
                                                    <small class="error">
                                                        Please select your state !
                                                    </small><!--./error-->
                
                                                </div><!--./input_box-->
                                            </div>
        
                                            <div class="col-12 col-lg-6 ps-0 ps-lg-2 second">
                                                <div class="input_box">
                                                    <label for="district">District</label>
                                                    <select name="district" id="district">
                                                        <option readonly value="">Select your district</option>
                                                        <option value="bhagalpur" {{ (Auth::user()->district == "bhagalpur") ? "selected" : "" }} > Bhagalpur </option>
                                                        <option value="bankha" {{ (Auth::user()->district == "bankha") ? "selected" : "" }} >Bankha</option>
                                                        <option value="mungare" {{ (Auth::user()->district == "mungar") ? "selected" : "" }} >Mungare</option>
                                                    </select>                                    
                                                    
                                                    <small class="error">
                                                        Please enter your subject !
                                                    </small><!--./error-->
                
                                                </div><!--./input_box-->
                                            </div>
                                        </div>
                                    </div><!--input_label-->
                                    
                                    <div class="input_label m-0">
                                        
                                        <div class="row p-0 m-0 mb-md-2 px-0">
                                            <div class="col-12 col-lg-6 ps-0 mx-0">
                                                <div class="input_box">
                                                    <label for="pincode">Pin code </label>
                                                    <input type="text" name="pincode" value="{{ Auth::user()->pincode }}" id="pincode" placeholder="Pincode" />
                                                    
                                                    <small class="error">
                                                        Please enter your 6 digits pin code number!
                                                    </small><!--./error-->
                                                </div><!--./input_box-->
                                            </div>
        
                                            <div class="col-12 col-lg-6 ps-0 ps-lg-2 second">
                                                <div class="input_box">
                                                    <label for="famous_place">Famous place </label>
                                                    <input type="text" name="famous_place" value="{{ Auth::user()->famous_place }}" id="famous_place" placeholder="Famous place" />
                                                    
                                                    <small class="error">
                                                        Please enter famous place around your area!
                                                    </small><!--./error-->
                                                </div><!--./input_box-->
                                            </div>
                                        </div>
                                    </div><!--input_label-->
    
                                    <div class="input_box">
                                        <label for="delivery_address">Delivery address</label>
                                        <textarea name="delivery_address" id="delivery_address" rows="8" placeholder="Write your message here">{{ Auth::user()->delivery_address }}</textarea>
                                        
                                        <small class="error">
                                            Enter your delivery address!
                                        </small><!--./error-->
    
                                    </div><!--./input_box-->
    
                                    <button type="submit" class="submit_btn login_submit_btn btn d-flex align-items-center justify-content-center">
                                        Change information
                                        <div class="spinner"></div>
                                    </button><!--./submit_btn--><br/>
                                    
                                </form>
    
                            </div>
                        </div><!--./right-->

                    </div><!--./row-->
                </div><!--./container-->
                
            </section><!--./view_profile-->
            
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
        
        <!--================================== External file link's ===============================-->
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--================================== Internal script writing ============================-->
        <script>
            $(document).ready(function(){
                
                // Logic to perform a ajax operation when user try to update profile information
                $(".profile_form").on("submit", function(event){
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
                    if(countary.value.trim() == "" || countary.value.trim() != "india"){

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
                    
                    // Validation for district
                    const pincode = event.target.pincode;
                    if(pincode.value.trim() == ""){

                        pincode.focus();
                        pincode.style.borderColor = "#f8020f";
                        pincode.nextElementSibling.style.display = "block";
                        pincode.nextElementSibling.innerText = "pincode is required. Please select your pincode.";
                        return;
                    }else if(pincode.value.length > 6 || pincode.value.length < 6){

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

                            if(resp.status == "success"){
                                Swal.fire({
                                    title: "Success",
                                    text: "Profile updated successfully.",
                                    icon: "success"
                                });
                            }else{
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

                // Logic to make a ajax request to change profile image
                $(".profile_img_form").on("change", function(event){
                    event.preventDefault();

                    // Get the profile image
                    let profile_img = event.target.files[0];
                    let spinner_box = $(".img_box .spinner_box");
                    spinner_box.show();

                    // Make a request
                    const form_data = new FormData(this);
                    $.ajax({
                        url: "{{ route("user.update_profile_image_request") }}",
                        type: "post",
                        data: form_data,
                        dataType: "json",
                        contentType: false,
                        processData: false,

                        success: function(resp){
                            
                            if(resp.status == "success"){
                                
                                $(".img_box .box .image")[0].src = resp.path;
                                $(".my_account .img_box img")[0].src = resp.path;

                                spinner_box.hide();
                                Swal.fire({
                                    title: "Image updated",
                                    text: "Image updated successfully.",
                                    icon: "success"
                                });
                            }else{
                                spinner_box.hide();
                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: "Unable to update image. Please try again latter!",
                                }); 
                            }
                        },

                        error: function(resp){
                            spinner_box.hide();
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Something went wrong. Please try again latter!",
                            }); 
                        }
                    });

                });

                // Logic to make a ajax request to change password
                $(".pssword_form").on("submit", function(event){

                    event.preventDefault();
                    
                    // Logic to make a clintside validation
                    if(new_pass.value.trim() == ""){
                        
                        new_pass.focus();
                        new_pass.style.borderColor = "#f8020f";
                        new_pass.nextElementSibling.style.display = "block";
                        new_pass.nextElementSibling.innerText = "Please enter the new password.";
                        return;
                    }else if(new_pass.value.trim().length > 100 || new_pass.value.trim().length < 8){
                        
                        new_pass.focus();
                        new_pass.style.borderColor = "#f8020f";
                        new_pass.nextElementSibling.style.display = "block";
                        new_pass.nextElementSibling.innerText = "Password must be between 8 and 100 characters long.";
                        return;
                    }else{
                        new_pass.nextElementSibling.style.display = "none";
                        new_pass.style.borderColor = "var(--shadow-color)";
                    };
                    
                    // Get the form data
                    const form_data = new FormData(this);
                    // Make a request
                    $.ajax({
                        url: "{{ route("user.update_password_request") }}",
                        type: "post",
                        dataType: "json",
                        data: form_data,
                        contentType: false,
                        processData: false,

                        success: function(resp){

                            if(resp.status == "success"){

                                event.target.reset();
                                Swal.fire({
                                    title: "Password Updated",
                                    text: "Password updated successfully.",
                                    icon: "success"
                                });
                            }else{

                                event.target.reset();
                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: "Unable to update password. Please try again latter!",
                                }); 
                            }
                        },

                        error: function(resp){

                            event.target.reset();
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Something went wrong. Please try again latter!",
                            }); 
                        }

                    });
                });

                // Logic to hide error when user click on particular input feild
                $(".view_profile :is(input, select, textarea)").each((ind, item)=>{
                    
                    item.addEventListener("click", (event)=>{
                        event.target.style.borderColor = "var(--shadow-color)";
                        event.target.nextElementSibling.style.display = "none";
                    });
                    
                })

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