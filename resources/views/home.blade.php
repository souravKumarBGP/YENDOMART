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
            @include("layoutes.navbar")
            <!--./nav-->

            <!--================ Start category_box section ===============-->
            <section class="category_box" id="category_box">
                <div class="container">
                    <ul class="d-flex flex-wrap justify-content-center justify-content-md-between" style="gap: 10px;">

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
                                <img src="{{ asset("assets/img/printer.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Printers
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
                                <img src="{{ asset("assets/img/parts.png") }}" alt="computer.png" />
                                <span class="text d-flex align-content-end">
                                    Computer Parts
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
                    <ul class="d-flex flex-wrap justify-content-center justify-content-md-between" style="gap: 10px;">

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
        @include("layoutes.footer")
        <!--./footer-->
        
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