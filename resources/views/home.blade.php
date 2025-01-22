<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yendo Ecommerce | Online electronic shop</title>
        <meta name="keywords" content="Yendo Ecommerce, Ecommerce" />
        <meta name="discreption" content="This yendo ecommerce website" />
        <meta name="author" content="Sourav Rupani" />
        <meta name="robots" content="index, following" />
        <!--================================== External file link's ===============================-->
        <link href="{{ asset("assets/css/frontend/bootstrap-grid.min.css") }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/owl.carousel.min.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/owl.theme.default.min.css") }}" />
        <!--================================== Internal file link's ===============================-->
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/common.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/navbar.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/home.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/footer.css") }}" />
    </head>
    <body>
        
        <!--================================== Start header section ===============================-->
        <header>
            <!--=================== Start navbar section ==================-->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">

                <section class="nav_top">
                    
                    <div class="container search_bar d-flex align-items-center justify-content-between">

                        <div class="left d-flex align-items-center justify-content-between">
                            <div class="logo d-flex align-items-center">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                                </svg>
                                YENDOMART
                            </div>
                            <div class="search_box">
                                <form action="#">
                                    <div class="input_box d-flex align-items-center">
                                        <select name="#" id="#">
                                            <option value="#">All Categories</option>
                                            <option value="#">Mobiles</option>
                                            <option value="#">Leptops And Coputers</option>
                                            <option value="#">Keybords and Mouse</option>
                                            <option value="#">Heade Phones</option>
                                            <option value="#">TV</option>
                                            <option value="#">Speakers</option>
                                            <option value="#">Fens</option>
                                            <option value="#">Men Fashion</option>
                                            <option value="#">Women Fashion</option>
                                            <option value="#">Shoes And Snikers</option>
                                        </select>
                                        <input type="search" name="#" id="#" placeholder="Search by brand name ex:- Samsung, Bajaj....">
                                        <button type="submit" class="btn search_btn">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div><!--./left-->

                        <div class="right d-flex align-items-center justify-content-end">
    
                            <button class="btn favorite">
                                <a href="#" class="d-flex align-items-center">
                                    <div class="icon_box">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 24" fill="currentColor"><path d="M12.001 4.52853C14.35 2.42 17.98 2.49 20.2426 4.75736C22.5053 7.02472 22.583 10.637 20.4786 12.993L11.9999 21.485L3.52138 12.993C1.41705 10.637 1.49571 7.01901 3.75736 4.75736C6.02157 2.49315 9.64519 2.41687 12.001 4.52853ZM18.827 6.1701C17.3279 4.66794 14.9076 4.60701 13.337 6.01687L12.0019 7.21524L10.6661 6.01781C9.09098 4.60597 6.67506 4.66808 5.17157 6.17157C3.68183 7.66131 3.60704 10.0473 4.97993 11.6232L11.9999 18.6543L19.0201 11.6232C20.3935 10.0467 20.319 7.66525 18.827 6.1701Z"></path></svg>
                                        <div class="badges d-flex align-items-center justify-content-center">2</div>
                                    </div>
                                    <span>Favorites</span>
                                </a>
                            </button><!--./btn-->
                            
                            <button class="btn my_cart">
                                <input type="checkbox" class="activ_disactive_checkbox activ_disactive_myCart" />
                                <div class="d-flex align-items-center">
                                    <div class="icon_box">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                                        </svg>
                                        <div class="badges d-flex align-items-center justify-content-center">2</div>
                                    </div>
                                    <span class="ms-2 d-flex align-items-center">
                                        My Cart
                                        <svg class="ms-2 arrow w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 30 30">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                        </svg>
                                    </span>
                                </div>

                                <div class="active_box my_cart_list_box">
                                    <p>Your shopping cart</p>

                                    <ul>

                                        <li class="items d-flex align-items-center justify-content-between">

                                            <div class="item_left d-flex align-items-center">
                                                <div class="img_box">
                                                    <img src="{{ asset("assets/img/phoone.png") }}" alt="phone" />
                                                </div>
                                                <div class="text_box align-self-start">
                                                    <a href="#">Apple iPhone 15</a>
                                                    <p class="price d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                            <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                        </svg>
                                                        40,000
                                                    </p>
                                                </div>
                                            </div><!--./left-->

                                            <div class="item_right d-flex align-items-center justify-content-between">

                                                <a href="" class="btn minus_btn d-flex justify-content-center align-items-center">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14"/>
                                                    </svg>
                                                </a>
                                                
                                                <span class="value">5</span>
                                                
                                                <a href="" class="btn plus_btn">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                                    </svg>
                                                </a>

                                                <a href="" class="btn del_btn">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>
                                                </a>

                                            </div><!--./right-->

                                        </li><!--./list_items-->

                                        <li class="items d-flex align-items-center justify-content-between">

                                            <div class="item_left d-flex align-items-center">
                                                <div class="img_box">
                                                    <img src="{{ asset("assets/img/phoone.png") }}" alt="phone" />
                                                </div>
                                                <div class="text_box align-self-start">
                                                    <a href="#">Apple iPhone 15</a>
                                                    <p class="price d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                            <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                        </svg>
                                                        40,000
                                                    </p>
                                                </div>
                                            </div><!--./left-->

                                            <div class="item_right d-flex align-items-center justify-content-between">

                                                <a href="" class="btn minus_btn d-flex justify-content-center align-items-center">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14"/>
                                                    </svg>
                                                </a>
                                                
                                                <span class="value">5</span>
                                                
                                                <a href="" class="btn plus_btn">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                                    </svg>
                                                </a>

                                                <a href="" class="btn del_btn">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>
                                                </a>

                                            </div><!--./right-->

                                        </li><!--./list_items-->

                                    </ul>
                                    <p class="total_pay_text">Total payment</p>
                                    <b class="amount d-flex align-content-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                            <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                        </svg>
                                        3,000
                                    </b>

                                    <a href="#" class="btn_see_cart">See your cart</a>
                                </div>
                            </button><!--./btn-->
    
                            <button class="btn my_account pe-0">
                                <input type="checkbox" class="activ_disactive_checkbox activ_disactive_account" />
                                <div class="d-flex align-items-center">
                                    <div class="img_box me-1 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset("assets/img/myimg.png") }}" alt="My Image" width="26px" />
                                    </div>
                                    <span class="d-flex align-items-center">
                                        My Account
                                        <svg class="ms-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 30 30">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                        </svg>
                                    </span>
                                </div>

                                <div class="active_box my_account_setting_box">
                                    <img src="{{ asset("assets/img/myimg.png") }}" alt="">
                                    <p><b>Hello, Sourav Rupani</b></p>
                                    <span style="display: block !important;">souravrupani@gmail.com</span><br/><br/>
                                    <a href="#" class="btn_view_profile">View Profile</a>

                                    <ul>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                                My Wishlist  
                                            </a>
                                        </li><!--./links-->

                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>
                                                My Cart
                                            </a>
                                        </li><!--./links-->

                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8H9m4-8V6c0-.26522-.1054-.51957-.2929-.70711C12.5196 5.10536 12.2652 5 12 5H4c-.26522 0-.51957.10536-.70711.29289C3.10536 5.48043 3 5.73478 3 6v9h2m14 0h2v-4m0 0h-5M8 8.66669V10l1.5 1.5m10 5c0 1.3807-1.1193 2.5-2.5 2.5s-2.5-1.1193-2.5-2.5S15.6193 14 17 14s2.5 1.1193 2.5 2.5Zm-10 0C9.5 17.8807 8.38071 19 7 19s-2.5-1.1193-2.5-2.5S5.61929 14 7 14s2.5 1.1193 2.5 2.5Z"/>
                                                </svg>
                                                My Orders
                                            </a>
                                        </li><!--./links-->

                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                                </svg>
                                                Delivery Address 
                                            </a>
                                        </li><!--./links-->

                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4m-2 2v-4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                </svg>
                                                  
                                                Sign Up
                                            </a>
                                        </li><!--./links-->

                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                                                </svg>
                                                Login
                                            </a>
                                        </li><!--./links-->
                                    </ul>
                                </div>
                                
                            </button><!--./btn-->
    
                        </div><!--./right-->
                    </div>
                    
                </section><!--./nav_top-->

                <section class="nav_bottom">
                    <div class="container">
                        <div class="mune_list_box d-flex align-items-center justify-content-between">

                            <div class="bars btn_box ps-0 d-none">
                                <button class="btn">
                                    <input type="checkbox" class="activ_disactive_checkbox" id="checkbox_3">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
                                    </svg>  
                                </button>
                            </div>
                            
                            <ul class="d-flex">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Mens Fashion</a></li>
                                <li><a href="#">Women Fashion</a></li>
                                <li><a href="#">Shoes And Sinakers</a></li>
                                <li><a href="#">Books And Stationery</a></li>
                            </ul>

                            <div class="btn_box saller_link d-none">
                                <button class="btn d-flex align-items-center">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z"/>
                                    </svg>
                                    <span>Become a saller</span>
                                </button>
                            </div>


                        </div><!--./mune_list_box-->
                    </div>
                </section><!--./nav_bottom-->
                    
            </nav><!--./nav-->

            <!--================ Start category_box section ===============-->
            <section class="category_box">
                <div class="container">
                    <ul class="d-flex flex-wrap justify-content-around justify-content-sm-between" style="gap: var(--gap-20px);">

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/phoone.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Phones
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/computer.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Laptops and Computers
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/keybord_and_mouse.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Keybords and Mouse
                                </span>
                            </a>
                        </li><!--./items--> 

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/speakers.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Speakers
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/men_fashion.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Men Fashion
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/women_fashion.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Women Fashion
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/shoes.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Shoes and Begs
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/watch.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Watches
                                </span>
                            </a>
                        </li><!--./items-->

                    </ul>
                </div>
            </section><!--./category_box-->

            <!--================ Start category_box section ===============-->
            <section class="crousel_section d-none d-md-block">
                <div class="container">
                    <div class="owl-carousel binner">
                        
                        <div class="items"> 
                            <img src="{{ asset("assets/img/binner1.jpg") }}" alt="binner1" />
                        </div><!--./items-->

                        <div class="items"> 
                            <img src="{{ asset("assets/img/binner2.jpg") }}" alt="binner2" />
                        </div><!--./items-->

                        <div class="items"> 
                            <img src="{{ asset("assets/img/binner3.png") }}" alt="binner3" />
                        </div><!--./items-->

                        <div class="items"> 
                            <img src="{{ asset("assets/img/binner4.jpg") }}" alt="binner4" />
                        </div><!--./items-->

                    </div>
                </div>
            </section><!--./crousel_section-->

            <!--================ Start brand_filter_box section ===============-->
            <section class="category_box brand_filter_box">
                <div class="container">
                    <ul class="d-flex flex-wrap justify-content-around justify-content-sm-between" style="gap: var(--gap-20px);">

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/apple.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Apple
                                </span>
                            </a>
                        </li><!--./items-->
                        
                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/hp.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Hp
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/dell.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Dell
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/lenvo.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Lenvo
                                </span>
                            </a>
                        </li><!--./items--> 

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/asus.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    ASUS
                                </span>
                            </a>
                        </li><!--./items-->

                        <li>
                            <a href="#" class="items d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/acer.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    acer
                                </span>
                            </a>
                        </li><!--./items-->

                    </ul>
                </div>
            </section><!--./brand_filter_box-->

        </header><!--./header-->

        <!--================================== Start Main section =================================-->
        <main>
            <!--============ Start top_selling_product_section sectio =============-->
            <section class="products_box top_selling_product_section ">
                <div class="container">
                    <div class="box">

                        <div class="heading d-flex align-items-center justify-content-between">
                            <span>Top Selling Products</span>
                            <button class="btn view_all_btn">
                                <a href="#" class="d-flex align-items-center" target="_blank">  
                                    View All
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </a>
                            </button>
                        </div><!--./heading-->

                        <div class="row mt-3 px-0" style="row-gap: 40px;">

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>

                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/phoone.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/wireless_hedphon.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                <span>15,000</span>
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <div class="item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                    <p class="product_name mt-1">
                                        <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                    </p>
    
                                    <div class="img_box">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset("assets/img/speaker.png") }}" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="#" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>30,000</del>
                                                15,000
                                            </a>
                                        </div><!--./left-->
    
                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>
                                            <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                            Order Now
                                        </a>
                                    </button>


                                </div>
                            </div><!--./items-->
                            
                        </div><!--./items_box-->

                    </div>
                </div>
            </section><!--./top_selling_product_section-->
            
            <!--================ Start electronic_product section =================-->
            <section class="products_box electronics_product_box">
                <div class="container">
                    <div class="box">

                        <div class="heading d-flex align-items-center justify-content-between">
                            <span>Electronics</span>
                            <button class="btn view_all_btn">
                                <a href="#" class="d-flex align-items-center" target="_blank">  
                                    View All
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </a>
                            </button>
                        </div><!--./heading-->
                        
                        <div class="owl-carousel owl-theme mt-3">

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->
                            
                        </div>
                    </div><!--./box-->
                </div>
            </section><!--./electronic_product-->
            
            <!--================ Start men_fashion_section section ================-->
            <section class="products_box men_fashion_section">
                <div class="container">
                    <div class="box">

                        <div class="heading d-flex align-items-center justify-content-between">
                            <span>Men`s Fashion</span>
                            <button class="btn view_all_btn">
                                <a href="#" class="d-flex align-items-center" target="_blank">  
                                    View All
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </a>
                            </button>
                        </div><!--./heading-->
                        
                        <div class="owl-carousel owl-theme mt-3">

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->
                            
                        </div>
                    </div><!--./box-->
                </div>
            </section><!--./men_fashion_section-->
            
            <!--=============== Start men_fashion_section section =================-->
            <section class="products_box men_fashion_section">
                <div class="container">
                    <div class="box">

                        <div class="heading d-flex align-items-center justify-content-between">
                            <span>Women`s Fashion</span>
                            <button class="btn view_all_btn">
                                <a href="#" class="d-flex align-items-center" target="_blank">  
                                    View All
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </a>
                            </button>
                        </div><!--./heading-->
                        
                        <div class="owl-carousel owl-theme mt-3">

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->
                            
                        </div>
                    </div><!--./box-->
                </div>
            </section><!--./men_fashion_section-->
            
            <!--============== Start books_stationery_section section =============-->
            <section class="products_box books_stationery_section">
                <div class="container">
                    <div class="box">

                        <div class="heading d-flex align-items-center justify-content-between">
                            <span>Stationery</span>
                            <button class="btn view_all_btn">
                                <a href="#" class="d-flex align-items-center" target="_blank">  
                                    View All
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </a>
                            </button>
                        </div><!--./heading-->
                        
                        <div class="owl-carousel owl-theme mt-3">

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->

                            <div class="item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="category_name">Speaker</p>
                                        <small style="color: #07dd07;">In Stock</small>
                                        {{-- <small style="color: #f66f6f;">Out Of Stock</small> --}}
                                        {{-- <small style="color: goldenrod;">Up Comming</small> --}}
                                    </div>
                                <p class="product_name mt-1">
                                    <a href="#" target="_blank">Wireless Audio System Multiroom 360 degree Full full sound speaker</a>
                                </p>

                                <div class="img_box">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset("assets/img/laptop.png") }}" alt="" />
                                    </a>
                                </div>

                                <div class="price_box d-flex align-items-center justify-content-between">
                                    
                                    <div class="left">
                                        <a href="#" class="price d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                            </svg>
                                            <del>30,000</del>
                                            15,000
                                        </a>
                                    </div><!--./left-->

                                    <div class="right d-flex align-items-center">
                                        <button class="btn like_btn d-flex align-items-center justify-content-center pb-0">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn add_cart_btn d-flex align-items-center justify-content-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                            </svg>                                              
                                        </button>
                                    </div><!--./right-->
                                </div>

                                <button class="btn mt-4" style="width: 100%;">
                                    <a href="#" class="btn order_link d-flex align-items-center justify-content-center">
                                        Order Now
                                    </a>
                                </button>


                            </div><!--./item-->
                            
                        </div>
                    </div><!--./box-->
                </div>
            </section><!--./books_stationery_section-->
            
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
        <footer>
            <!--============== Start footer_top_section sectio =============-->
            <section class="footer_top_section">
                <div class="container">
                    <div class="row">

                        <div class="left col-12 col-md-8">
                            <div class="row flex-wrap">

                                <div class="item item1 col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="heading">
                                        <p>SHOP INFOMERATION</p>
                                    </div>
        
                                    <div class="contact_box">
                                        <a href="#" class="d-flex">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.0225 4 14 8.98132m0 0 3.03.00002M14 8.98132V5.99998m4.2327 8.51492-1.1431-1.1439c-1.143-1.1439-1.9758-.3696-2.8382.4565-.3159.3161-.7443.4936-1.1911.4936-.4467 0-.8751-.1775-1.191-.4936L9.998 11.9549c-.65643-.6564-.92477-1.4591 0-2.38383.8488-.86837 1.6837-1.61177.4926-2.8037L9.2995 5.57544c-.90492-.90556-1.99137-.383-2.61843.23625-3.13257 3.1118-1.72021 6.77001 1.41066 9.90141s6.78747 4.5465 9.90477 1.4254c.1744-.1461.551-.565.6473-.7712.0962-.2062.1461-.4311.1461-.6587 0-.2277-.0499-.4525-.1461-.6588-.0963-.2062-.2366-.3888-.4111-.5349Z"/>
                                            </svg>
                                            +91 9065608408 
                                        </a>
        
                                        <div class="socal_links_box d-flex">

                                            <button class="btn">
                                                <a href="#">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                                    </svg>                                                                                            
                                                </a>
                                            </button>
                                            
                                            <button class="btn">
                                                <a href="#">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                                        <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                                    </svg> 
                                                </a>                                         
                                            </button>
        
                                            <button class="btn">
                                                <a href="#">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                                                    </svg>                                          
                                                </a>
                                            </button>
        
                                            <button class="btn">
                                                <a href="#">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                                    </svg>                                          
                                                </a>
                                            </button>
        
                                            <button class="btn">
                                                <a href="#">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                                                    </svg>                                          
                                                </a>
                                            </button>

                                        </div>
        
                                        <div class="img_location mb-2">
                                            <img src="{{ asset("assets/img/shop_img.jpg") }}" alt="">
                                        </div>
        
                                    </div>
                                    
        
                                </div><!--./item-->
        
                                <div class="item item2 col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="heading">
                                        <p>SORT LINKS</p>
                                    </div>
        
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">My Profile</a></li>
                                        <li><a href="#">My Orders</a></li>
                                        <li><a href="#">My Cart</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">My Delivery Address</a></li>
                                    </ul>
        
                                </div><!--./item-->
                                
                                <div class="item item3 col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="heading">
                                        <p>CUSTOMER POLICY</p>
                                    </div>
        
                                    <ul>
                                        <li><a href="#">Condition And Returns</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Terms of use</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
        
                                </div><!--./item-->
                            </div>
                        </div><!--./left-->
                        
                        <div class="right col-12 col-md-4">
                            <div class="row">

                                <div class="item item4 col-12 col-sm-6">
                                    <div class="heading">
                                        <p>Search by brand name</p>
                                    </div>
        
                                    <ul>
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Dell</a></li>
                                        <li><a href="#">HP</a></li>
                                        <li><a href="#">Lenvo</a></li>
                                        <li><a href="#">Acer</a></li>
                                        <li><a href="#">Asus</a></li>
                                    </ul>
        
                                </div><!--./item-->

                                <div class="item item5 col-12 col-sm-6">
                                    <div class="heading">
                                        <p>Search by categoryies</p>
                                    </div>
        
                                    <ul>
                                        <li><a href="#">Top sealling products</a></li>
                                        <li><a href="#">Laptopes</a></li>
                                        <li><a href="#">Desktop And CPU</a></li>
                                        <li><a hrefs="#">Keybord, Mouse And Speakers</a></li>
                                        <li><a href="#">Assoceries EX:- SSD, Hard Disk, Battery...</a></li>
                                    </ul>
        
                                </div><!--./item-->

                            </div>
                        </div><!--./right-->
                        
                    </div>
                </div>
            </section><!--./footer_top_section-->

            <!--============ Start footer_bottom_section sectio ===========-->
            <section class="footer_bottom_section mt-5 py-2 container">
                <ul class="d-flex align-items-center justify-content-between py-2">
                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z"/>
                            </svg>
                            Become a saller  
                        </a>
                    </li>

                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16.2877 9.42773C15.413 7.97351 13.8195 7 12 7 9.23999 7 7 9.23999 7 12 7 14.76 9.23999 17 12 17 13.8195 17 15.413 16.0265 16.2877 14.5723L14.5729 13.5442C14.0483 14.4166 13.0927 15 12 15 10.3425 15 9 13.6575 9 12 9 10.3425 10.3425 9 12 9 13.093 9 14.0491 9.58386 14.5735 10.4568L16.2877 9.42773ZM22 12C22 6.47998 17.52 2 12 2 6.47998 2 2 6.47998 2 12 2 17.52 6.47998 22 12 22 17.52 22 22 17.52 22 12ZM4 12C4 7.57996 7.57996 4 12 4 16.42 4 20 7.57996 20 12 20 16.42 16.42 20 12 20 7.57996 20 4 16.42 4 12Z"></path></svg>
                            2003-2025 bccShop.com
                        </a>
                    </li>

                    <li>
                        <a href="#" style="color: var(--primary-color);">
                            Developer: Sourav Rupani
                        </a>
                    </li>


                </ul>
            </section><!--./footer_bottom-->
            
        </footer><!--./footer-->
        
        <!--================================== internal file link's ===============================-->
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
        <!--================================== internal script writing ============================-->
        <script>

            // Logic to initlize owl binner
            $(document).ready(function(){
                $('.binner').owlCarousel({
                    animateOut: 'fadeOut',
                    items:1,
                    margin:0,
                    loop:true,
                    stagePadding: "-1",
                    smartSpeed:500,
                    nav:true,
                    autoplay: true,
                    mergeFit:true,
                    dots: false,
                });
            });
            $('.owl-theme').owlCarousel({
                loop:true,
                margin:40,
                nav:true,
                dots: false,
                autoplay: true,
                smartSpeed:600,
                autoplayHoverPause: true,
                autoplayTimeout:3000,
                responsive:{
                    0:{
                        items:1
                    },
                    576:{
                        items:2
                    },
                    992:{
                        items:3
                    },
                    1200:{
                        items:4
                    }
                }
            })

            // Logic to perform active and disactive my_cart_list_box and my_account_setting_boxs
            function unchecked(){
                // Uncheck all checkboxes
                $(".activ_disactive_checkbox").each(function(index, item) {
                    item.checked = false; 
                });
            }
            $(".activ_disactive_checkbox").on("click", (event) => {
                if(!event.target.checked) {
                    event.target.checked = false;
                }else{
                    unchecked();
                    event.target.checked = true;
                }
            });
            
            // Logic to show product name in ellipsis format
            $(".products_box .product_name a").each((ind, item) => {
                let text = $(item).text().trim();
                if (text.length > 90) {
                    let truncatedText = text.slice(0, 90) + "...";
                    $(item).text(truncatedText);
                }
            });

        </script>
        
    </body>
</html>