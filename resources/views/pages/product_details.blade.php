<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yendo Ecommerce |Product-filter| Online electronic shop</title>
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
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/footer.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/product_details.css") }}" />
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
            <!--================= Start get_update_section section ===============-->
            <section class="product_showcase">
                <div class="container" style="height: 100%;">
                    <div class="row" style="height: 100%; row-gap: 30px;">
                        <div class="left col-12 col-lg-7 col-xl-6">
                            <div class="img_box">
                                <div class="row justify-content-between" style="height: 100%;">
                                    <div class="aside_img col-12 col-lg-2 order-last order-lg-1">
                                        <div class="row flex-nowrap flex-lg-wrap">
                                            <div class="item col-2 active_img">
                                                <img src="{{ asset("assets/img/computer.png") }}" alt="">
                                            </div>
                                            <div class="item col-2">
                                                <img src="{{ asset("assets/img/computer.png") }}" alt="">
                                            </div>
                                            <div class="item col-2">
                                                <img src="{{ asset("assets/img/computer.png") }}" alt="">
                                            </div>
                                            <div class="item col-2">
                                                <img src="{{ asset("assets/img/computer.png") }}" alt="">
                                            </div>
                                            <div class="item col-2">
                                                <img src="{{ asset("assets/img/computer.png") }}" alt="">
                                            </div>
                                            <div class="item col-2">
                                                <img src="{{ asset("assets/img/computer.png") }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="big_img col-12 col-lg-10 align-self-start order-first order-lg-2">
                                        <img  alt="Image To Zoom" class="b_img" src="{{ asset("assets/img/laptop.png") }}" />
                                    </div>
                                </div>
                            </div>
                        </div><!--./left-->

                        <div class="right col-12 col-lg-5 col-xl-6">
                            <div class="box box1">
                                <p class="name">Apple Macbook Pro 1502</p>
                                <br/>
                                <div class="bornd_logo d-flex align-items-center gap-15px" >
                                    <img src="{{ asset("assets/img/dell.png") }}" alt="">
                                    <small style="color: #07dd07;">In Stock</small>
                                </div>
                            </div>
                            <div class="box box2">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <span>Storage: </span>
                                        <button class="btn">256 GB SSD</button>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Processor: </span>
                                        <button class="btn">Intel® Core™ i5</button>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Ram: </span>
                                        <button class="btn">8GB RAM</button>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Size: </span>
                                        <button class="btn">14`inch</button>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Quantity: </span>
                                        <input type="number" value="1" style="width: 20%;">
                                    </li>
                                </ul>
                            </div>
                            <div class="box box3">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-start gap-15px">
                                        <span>Total Price: </span>
                                        <b>20000</b>
                                    </li>
                                </ul>
                                <br/>
                                <div class="btn_box d-flex">
                                    <button class="buy_now_btn btn d-flex align-items-center">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                                        </svg>                                      
                                        Buy Now
                                    </button>
                                    <button class="add_to_cart_btn btn d-flex align-items-center">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                        </svg>                                      
                                        Add To Cart
                                    </button>
                                    <button class="live_demo_btn btn d-flex align-items-center">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>                                      
                                        Live Demo
                                    </button>
                                </div>
                            </div>
                            <div class="box box4">
                                <li class="d-flex align-items-center">
                                    <span>Payments: </span>
                                    <p class="d-flex align-items-center gap-15px ms-3">
                                        <img src="{{ asset("assets/img/googlepay.png") }}" alt="">
                                        <img src="{{ asset("assets/img/paytmpay.png") }}" alt="">
                                        <img src="{{ asset("assets/img/phonepay.png") }}" alt="">
                                        <img src="{{ asset("assets/img/payple.png") }}" alt="">
                                        <img src="{{ asset("assets/img/mastercart.png") }}" alt="">
                                    </p>
                                </li><br/>
                                <li class="d-flex align-items-center">
                                    <span>Share: </span>
                                    <p class="d-flex align-items-center gap-15px ms-3">

                                        <a href="#">
                                            <svg style="color: royalblue;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg style="color: #07dd07;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                            </svg>                                              
                                        </a>

                                        <a href="#">
                                            <svg style="color: orangered;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>

                                        <a href="#">
                                            <svg style="color: block;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
                                            </svg>
                                        </a>
                                          
                                    </p>
                                </li>
                            </div>
                            <div class="box box5 pt-4">
                                <p>Product Details :</p>
                                <ul>
                                    <li><strong>Model:</strong> Apple MacBook Pro A1502, 2015 Series</li>
                                    <li><strong>Processor:</strong> Intel® i5 2.2GHz</li>
                                    <li><strong>RAM:</strong> 8GB RAM</li>
                                    <li><strong>Harddisk:</strong> 256GB SSD (upgradeable up to 512GB)</li>
                                    <li><strong>SSD Supported:</strong> Yes</li>
                                    <li><strong>OS Supported:</strong> macOS Monterey</li>
                                    <li><strong>Display:</strong> 13.3' HD Retina Display</li>
                                    <li><strong>Graphics:</strong> Intel HD Graphics</li>
                                    <li><strong>Optical Drive:</strong> No</li>
                                    <li><strong>USB Ports:</strong> 2</li>
                                    <li><strong>Camera:</strong> Yes</li>
                                    <li><strong>Mini Display Port:</strong> HDMI/VGA/Thunderbolt</li>
                                    <li><strong>Number Keys:</strong> No</li>
                                    <li><strong>Communication:</strong>
                                      <ul>
                                        <li>LAN: 10/100/1000 Gigabit Ethernet</li>
                                        <li>WLAN: Wireless (802.11a/b/g/n)</li>
                                      </ul>
                                    </li>
                                    <li><strong>Audio:</strong>
                                      <ul>
                                        <li>High-Quality Speakers</li>
                                        <li>Stereo headphone jack</li>
                                      </ul>
                                    </li>
                                    <li><strong>Adapter:</strong> Yes</li>
                                    <li><strong>Backup:</strong> Up to 3-5 hours</li>
                                    <li><strong>Body:</strong> Metal</li>
                                </ul>
                                  
                            </div>
                        </div><!--./right-->
                    </div>
                </div>
            </section><!--./product_showcase-->

            <!--================ Start electronic_product section =================-->
            <section class="products_box simelar_product">
                <div class="container">
                    <div class="box">

                        <div class="heading d-flex align-items-center justify-content-between">
                            <span>Similar Products</span>
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

                        </div>
                    </div><!--./box-->
                </div>
            </section><!--./electronic_product-->

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
        <script src="{{ asset("assets/js/zoomsl.min.js") }}"></script>
        <!--================================== internal script writing ============================-->
        <script>

            // Logic to initlize owl crousel
            $(document).ready(function(){
                $('.owl-theme').owlCarousel({
                    loop:true,
                    margin:5,
                    nav:true,
                    dots: true,
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
            });
            $(function(){
                $(".b_img").imagezoomsl();
            });

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

        </script>
    </body>
</html>