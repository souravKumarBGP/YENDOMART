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
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/product_filter.css") }}" />
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

            <div class="container">
                <div class="row">
                    
                    @if(count($search_data))

                        <!--=============== Start filter_section section ================-->
                        <section class="col-2 d-none d-lg-block px-0 d-none">
    
                            <div class="filter_box">
    
                                <div class="heading d-flex align-items-center justify-content-between">
                                    <p class="d-flex">
                                        Filter
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z"/>
                                        </svg>                                  
                                    </p>
        
                                    <button class="btn clr_filter_btn d-flex align-items-center">
                                        Clear Filters
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>                                  
                                    </button>
                                </div><!--./heading-->
    
                                <div class="option_box">
                                    <form action="#">
    
                                        <div class="box box1">
                                            <p><b>Price</b></p>
                                            <ul>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="radio" name="price" id="lth">
                                                    <label for="lth">Low to High</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="radio" name="price" id="htl">
                                                    <label for="htl">High to Low</label>
                                                </li>
                                            </ul>
                                        </div><!--./box-->
    
                                        <div class="box box2">
                                            <p><b>Colors</b></p>
                                            <ul>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="colors" id="gold">
                                                    <label for="gold">Gold</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="colors" id="sliver">
                                                    <label for="sliver">Sliver</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="colors" id="block">
                                                    <label for="block">Black</label>
                                                </li>
                                            </ul>
                                        </div><!--./box-->
    
                                        <div class="box box3">
                                            <p><b>RAM</b></p>
                                            <ul>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="ram" id="2gb">
                                                    <label for="2gb">2GB</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="ram" id="4gb">
                                                    <label for="4gb">4GB</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="ram" id="8gb">
                                                    <label for="8gb">8GB</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="ram" id="16gb">
                                                    <label for="16gb">16GB</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="ram" id="32gb">
                                                    <label for="32gb">32GB</label>
                                                </li>
                                            </ul>
                                        </div><!--./box-->
    
                                        <div class="box box4">
                                            <p><b>Storage</b></p>
                                            <ul>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="storage" id="16gbssd">
                                                    <label for="16gbssd">16GB SSD</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="storage" id="128gbssd">
                                                    <label for="128gbssd">128GB SSD</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="storage" id="256gbssd">
                                                    <label for="256gbssd">256GB SSD</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="storage" id="512gbssd">
                                                    <label for="512gbssd">512GB SSD</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="storage" id="1tbssd">
                                                    <label for="1tbssd">1TB SSD</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="storage" id="512gbhd">
                                                    <label for="512gbhd">512GB Hard Disk</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="storage" id="1tbhd">
                                                    <label for="1tbhd">1TBGB Hard Disk</label>
                                                </li>
                                            </ul>
                                        </div><!--./box-->
    
                                        <div class="box box5" style="border-bottom: none;">
                                            <p><b>Size</b></p>
                                            <ul>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="size" id="12inch">
                                                    <label for="12inch">12 Inch</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="size" id="14inch">
                                                    <label for="14inch">14 Inch</label>
                                                </li>
                                                <li class="d-flex align-items-center" style="gap: 5px;">
                                                    <input type="checkbox" name="size" id="16inch">
                                                    <label for="16inch">16 Inch</label>
                                                </li>
                                            </ul>
                                        </div><!--./box-->
    
                                    </form>
    
                                </div><!--./option_box-->
    
                            </div>
                            
                        </section><!--./filter_section-->
    
                        <!--============== Start products_section section ==============-->
                        <section class="col-12 col-lg-10">
                            <div class="products_box pb-4">
    
                                <div class="heading d-flex align-items-center justify-content-between">
                                    <p class="d-flex align-items-center">
                                        Total
                                        <span class="ms-2" style="font-size: 12px; color: gray;">{{ count($search_data) }}</span>
                                    </p>
                                    <button class="btn view_all_btn d-flex align-items-center">
    
                                        <div>
                                            <span>1</span>
                                            <span>Of</span>
                                            <span>30</span>
                                        </div>
                                        
                                        <a href="#" class="d-flex align-items-center px-2" target="_blank">  
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                            </svg>
                                        </a>
                                    </button>
                                </div><!--./heading-->
    
                                <div class="box">
                                    <div class="row mt-3 px-0" style="row-gap: 40px;">
    
                                        @foreach ($search_data as $item)
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">

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
                                                                <del>30,000</del>
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

                                            </div><!--./items-->
                                        @endforeach
            
                                    </div><!--./items_box-->
                                </div><!--./box-->
    
                                <div class="paginate mt-4">
                                    <small>
                                        {{ $search_data->links("pagination::bootstrap-5") }}
                                    </small>
                                </div>
                            </div>

                        </section><!--./product_section-->

                        @else
                            <section class="data_not_found d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset("assets/img/no_result_found.png") }}" style="width: 250px;" alt="No result found" />                  
                                <h2 class="my-2"><b>Sorry, no results found!</b></h2>
                                <p>Please check the spelling or try searching for something else</p>
                            </section><!--./data_not_found-->
                        
                    @endif
                    
                    
                </div><!--./row-->
                
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
            
        </><!--./-->
        
        <!--================================== Start Footer section ===============================-->
        @include("layoutes.footer")
        <!--./footer-->

        <!--================================== External script writing ============================-->
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--================================== internal script writing ============================-->
        <script>

            $(document).ready(function(){

                // Logic to open filter option when user click on filter btn
                $("#filter_btn_checkbox").on("click", function () {
                    if ($(this).prop("checked")) {
                        $("section:has(.filter_box)").css("right", "0");
                        unchecked();
                    } else {
                        $("section:has(.filter_box)").css("right", "-100%");
                    }
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

                // Logic to show product name in ellipsis format
                $(".products_box .product_name a").each((ind, item) => {
                    let text = $(item).text().trim();
                    if (text.length > 30) {
                        let truncatedText = text.slice(0, 30) + "...";
                        $(item).text(truncatedText);
                    }
                });
            });
           
        </script>
    </body>
</html>