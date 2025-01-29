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
                                    <img src="{{ asset("assets/img/myimg2.jpg") }}" alt="">

                                    <div class="profile_img_box d-flex align-items-center justify-content-center">
                                        <button class="btn">Update Photo</button>
                                        <form action="#">
                                            <input type="file" name="profile_img" id="profile_img" />
                                        </form>
                                    </div><!--./profile_img_box-->

                                    <form action="#" class="pssword_form">

                                        <div class="input_box">
                                            <label for="old_pass">Old Password</label>
                                            <input type="Password" disabled id="old_pass" value="s@gmail.com"/>
                                        </div><!--./input_box-->

                                        <div class="input_box">
                                            <label for="new_pass">New Password</label>
                                            <input type="Password" id="new_pass" placeholder="Enter new password" />
                                        </div><!--./input_box-->

                                        <button class="btn change_pass_submit_btn" type="submit">
                                            Change Password
                                        </button>
                                        
                                    </form>
                                </div><!--./img_box-->

                            </div>
                        </div><!--./left-->
                        
                        <div class="col-12 col-md-8">
                            <div class="right pb-0">
    
                                <form action="#" id="contactus_form" method="POST" autocomplete="on">
    
                                    <div class="form_heading">
                                        <p>Profile information</p>
                                        <div class="line"></div>
                                    </div><!--./form_heading-->
                                    <br/>
    
                                    <div class="input_label m-0 mt-1">
                                        
                                        <div class="row p-0 m-0 mb-md-2 px-0">
                                            <div class="col-12 col-lg-6 ps-0 mx-0">
                                                <div class="input_box m-0">
                                                    <label for="full_name">Full name </label>
                                                    <input type="text" name="full_name" value="Sourav Rupani" id="full_name" placeholder="Full name" />
                                                    
                                                    <small class="error">
                                                        Please enter your full name !
                                                    </small><!--./error-->
                                                    
                                                </div><!--./input_box-->
                                            </div>
        
                                            <div class="col-12 col-lg-6 ps-0 ps-lg-2 second">
                                                <div class="input_box m-0">
                                                    <label for="email">Email </label>
                                                    <input type="email" name="email" value="s@gmail.com" id="email" placeholder="Email id" />
                                                    
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
                                                    <input type="text" name="phone" value="9065608408" id="phone_number" placeholder="Phone number" />
                                                    
                                                    <small class="error">
                                                        Please enter your 10 digits phone number!
                                                    </small><!--./error-->
                                                </div><!--./input_box-->
                                            </div>
        
                                            <div class="col-12 col-lg-6 ps-0 ps-lg-2 second">
                                                <div class="input_box">
                                                    <label for="countary">Countary</label>
                                                    <input type="text" name="countary" disabled value="India" id="countary" placeholder="Countary" />
                                                    
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
                                                        <option value="jharkhand" selected>Bihar</option>
                                                        <option value="jharkhand">Jharkhand</option>
                                                        <option value="bangal">Bangal</option>
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
                                                        <option value="bhagalpur" selected>Bhagalpur</option>
                                                        <option value="bankha">Bankha</option>
                                                        <option value="Mungare">Mungare</option>
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
                                                    <input type="text" name="pincode" value="813205" id="pincode" placeholder="Pincode" />
                                                    
                                                    <small class="error">
                                                        Please enter your 6 digits pin code number!
                                                    </small><!--./error-->
                                                </div><!--./input_box-->
                                            </div>
        
                                            <div class="col-12 col-lg-6 ps-0 ps-lg-2 second">
                                                <div class="input_box">
                                                    <label for="famous_place">Famous place </label>
                                                    <input type="text" name="famous_place" value="Nathnagar" id="famous_place" placeholder="Famous place" />
                                                    
                                                    <small class="error">
                                                        Please enter famous place around your area!
                                                    </small><!--./error-->
                                                </div><!--./input_box-->
                                            </div>
                                        </div>
                                    </div><!--input_label-->
    
                                    <div class="input_box">
                                        <label for="delevery_address">Delivery address</label>
                                        <textarea name="delevery_address" id="delevery_address" rows="8" placeholder="Write your message here">Nathnagar karela chowck.</textarea>
                                        
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

    </body>
</html>