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
                                    <div class="aside_img col-12 col-lg-2 order-last order-lg-1 mt-1 mt-sm-5 mt-lg-0">
                                        <div class="row flex-nowrap flex-lg-wrap">
                                            @foreach ($product_data->gallary_img as $val)
                                                <div class="item col-2 {{ ($loop->iteration == 1) ? "active_img" : "" }}">
                                                    <img src="{{ asset("storage/".$val) }}" alt="{{ $product_data->name }}" />
                                                </div>
                                            @endforeach
                                        </div>
                                    </div><!--./aside_img-->

                                    <div class="big_img col-12 col-lg-10 align-self-start order-first order-lg-2">
                                        <img class="b_img" src="{{ asset("storage/".$product_data->thumbnail_img) }}" alt="{{ $product_data->name }}" />
                                    </div><!--./big_img-->

                                </div>
                            </div>
                        </div><!--./left-->

                        <div class="right col-12 col-lg-5 col-xl-6">
                            <div class="box box1">
                                <p class="name">{{ $product_data->name }}</p>
                                <br/>
                                <div class="bornd_logo d-flex align-items-center gap-15px" >
                                    <img src="{{ asset("storage/".$brands_img->brand_img) }}" alt="">
                                    @if ($product_data->product_status == "in stock")
                                        <b>
                                            <small style="color: #07dd07;">In Stock</small>
                                        </b>
                                        
                                    @elseif($product_data->product_status == "up comming")
                                        <b>
                                            <small style="color: #e7aa10;">Up Comming</small>
                                        </b>
                                    @else
                                        <b>
                                            <small style="color: #f66f6f;">Out Of Stock</small>
                                        </b>
                                    @endif
                                    
                                </div>
                            </div>
                            <div class="box box2">
                                <ul>

                                    <li class="d-flex align-items-center">
                                        <span>Storage: </span>
                                        <button class="btn">{{ strtoupper(json_decode($product_data->product_discreption)->storage) }}</button>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Processor: </span>
                                        <button class="btn">{{ ucfirst(json_decode($product_data->product_discreption)->processor) }}</button>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Ram: </span>
                                        <button class="btn">{{ strtoupper(json_decode($product_data->product_discreption)->ram) }}</button>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Display: </span>
                                        <p style="font-size: 14px;">{{ ucwords(json_decode($product_data->product_discreption)->display) }}</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Body: </span>
                                        <p style="font-size: 14px;">{{ ucwords(json_decode($product_data->product_discreption)->body) }}</p>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="box box3">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-start gap-15px">
                                        <span>New Price: </span>
                                        <b><del style="color: red;">₹ {{ $product_data->new_price }}</del></b>
                                    </li>

                                    <li class="d-flex align-items-center justify-content-start gap-15px">
                                        <span>Price: </span>
                                        <b>₹ {{ $product_data->selling_price }}</b>
                                    </li>
                                    
                                </ul>
                                <br/>
                                <hr><br/>
                                <div class="btn_box d-flex">
                                    <button class="buy_now_btn {{ ($product_data->product_status == "in stock") ? "add_cart_btn" : "" }} btn d-flex align-items-center" data-id="{{ base64_encode($product_data->id) }}">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                                        </svg>                                      
                                        Buy Now
                                    </button>
                                    <button class="add_to_cart_btn {{ ($product_data->product_status == "in stock") ? "add_cart_btn" : "" }} btn d-flex align-items-center" data-id="{{ base64_encode($product_data->id) }}">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                        </svg>                                      
                                        Add To Cart
                                    </button>
                                    <a href="{{ $product_data->live_link }}" target="_blank">
                                        <button class="live_demo_btn btn d-flex align-items-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                            </svg>                                      
                                            Live Demo
                                        </button>
                                    </a>
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

                                        <a href="https://www.facebook.com/" target="_blank">
                                            <svg style="color: royalblue;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                        <a href="https://web.whatsapp.com/" target="_blank">
                                            <svg style="color: #07dd07;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                            </svg>                                              
                                        </a>

                                        <a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank">
                                            <svg style="color: orangered;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>

                                        <a href="https://x.com/?lang=en&mx=2" target="_blank">
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

                                    <li><strong>SKU:</strong> {{ $product_data->sku }}</li>
                                    @foreach(json_decode($product_data->product_discreption) as $key=> $value)
                                        <li><strong>{{ strtoupper($key) }}:</strong> {{ $value }}</li>
                                    @endforeach
                                </ul>
                                  
                            </div>
                            <br/><br/>

                            <div class="term" style="color: black;">
                                <p><b>-Terms & Condition</b></p><br/>

                                <ul>
                                    <li>
                                        ✅ 10 days Replacement Guarantee , If hardware problem can replace with same Model. 
                                    </li>
                                    <li>
                                        ✅ 10 days testing warranty, If hardware problem can replace with same Model. 
                                    </li>
                                    <li>
                                        ✅ 1 Hr+ backup Guarantee
                                    </li>
                                    <li>
                                        ✅ Corporate used products.
                                    </li>
                                    <li>
                                        ✅  More details kindly  check online policy.
                                    </li>

                                    <li>
                                        ✅  <a href="tel:7763999333" target="_blank">Help? +91 7763999333</a>.
                                    </li>
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

                            @foreach ($similar_products_data as $item)
                            
                                <div class="item">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="category_name">{{ ucwords($item->brand_name) }}</p>

                                        @if ($item->product_status == "in stock")
                                            <small style="color: #07dd07;">In Stock</small>
                                            
                                        @elseif($item->product_status == "up comming")
                                            <small style="color: #e7aa10;">Up Comming</small>
                                        @else
                                            <small style="color: #f66f6f;">Out Of Stock</small>
                                        @endif
                                    </div>

                                    <p class="product_name mt-2">
                                        <a href="{{ route('pages.product_details_page', $item->slug) }}" >{{ $item->name }}</a>
                                    </p>

                                    <div class="img_box">
                                        <a href="{{ route('pages.product_details_page', $item->slug) }}">
                                            <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="{{ $item->name }}" />
                                        </a>
                                    </div>

                                    <div class="price_box d-flex align-items-center justify-content-between">
                                        
                                        <div class="left">
                                            <a href="{{ route('pages.product_details_page', $item->slug) }}" class="price d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                <del>{{ $item->new_price }}</del>
                                                {{ $item->selling_price }}
                                            </a>
                                        </div><!--./left-->

                                        <div class="right d-flex align-items-center">
                                            <button class="btn like_btn d-flex align-items-center justify-content-center pb-0" data-id="{{ base64_encode($item->id) }}">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                </svg>
                                            </button>

                                            <button class="btn {{ ($item->product_status == "in stock") ? "add_cart_btn" : "" }} d-flex align-items-center justify-content-center" data-id="{{ base64_encode($item->id) }}">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                </svg>                                              
                                            </button>
                                        </div><!--./right-->
                                    </div>

                                    <button class="btn mt-4" style="width: 100%;">
                                        <a href="{{ route('pages.product_details_page', $item->slug) }}" class="btn order_link d-flex align-items-center justify-content-center">
                                            View Details
                                        </a>
                                    </button>

                                </div>

                            @endforeach

                        </div>
                    </div><!--./box-->
                </div>
            </section><!--./electronic_product-->

            <!--================ Start customer_policy section ====================-->
            <section class="customer_policy mt-5 py-4">
                <div class="container">
                    <div class="row" style="row-gap: 17px;">
                        <div class="col-6 col-sm-3">
                            <div class="item item1">
                                <a href="{{ route("sellerpolicy") }}">
                                    Seller Policy
                                </a>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3">
                            <div class="item item2">
                                <a href="{{ route("returnpolicy") }}">
                                    Return policy
                                </a>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3">
                            <div class="item item3">
                                <a href="{{ route("supportpolicy") }}">
                                    Support policy
                                </a>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3">
                            <div class="item item4">
                                <a href="{{ route("shipping-policy") }}">
                                    Shipping policy
                                </a>
                            </div>
                        </div><!--./item-->
                    </div>
                </div>
            </section>
            
            <!--================= Start get_update_section section ===============-->
            <section class="get_update_section mt-0">
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--================================== internal script writing ============================-->
        <script>

            $(document).ready(function(){
                
                // Logic to initlize owl crousel
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

                // Logic to show current product image when user click on gallary image
                $(".aside_img .item").on("click", function(event){

                    // Logic to get the current src
                    let src = this.querySelector("img").src;
                    
                    // Remove "active_img" class from all items and add it to the clicked one
                    $(".aside_img .item").removeClass("active_img");
                    $(this).addClass("active_img");
                    
                    // Logic to set this src in big image
                    $(".b_img").prop("src", src);

                });
                
                // Logic to handle a ajax request for store my favorites product
                $(".like_btn").on("click", function(event){
                    event.preventDefault();
                    // console.log($(this).data("id"));
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

                                window.location.href= "{{ route("pages.my_cart") }}";
                                
                                // Swal.fire({
                                //     title: "Success",
                                //     text: "Product added successfully.",
                                //     icon: "success"
                                // });

                            }else if(resp.status == "user_not_login"){
                                
                                window.location.href = "{{ route("pages.signup_login_page") }}";

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

                // Logic to show product name in ellipsis format
                $(".products_box .product_name a").each((ind, item) => {
                    let text = $(item).text().trim();
                    if (text.length > 25) {
                        let truncatedText = text.slice(0, 25) + "...";
                        $(item).text(truncatedText);
                    }
                });

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