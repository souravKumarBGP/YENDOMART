<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yendo Ecommerce |My-Cart| Online electronic shop</title>
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
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/my-cart.css") }}" />
        <style>
            td,th{
                border-left: 0.2px solid #d0d0d050;
                padding-left: 10px
            }
        </style>
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
            
            <!--==================== Start my_cart_box section ===================-->
            <section class="my_cart">

                
                @if(count($my_order_list) > 0)
                    <div class="container">

                        <div class="heading">
                            <p>My-Orders</p>
                        </div>

                        <div class="row">
                            <div class="item item1 col-12 col-lg-9 mx-auto">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Pay Amount</th>
                                            <th>Due Amount</th>
                                            <th>Total Amount</th>
                                            <th>Order Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($my_order_list as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>

                                                    {{-- Logic to generate slug --}}
                                                    @php
                                                        $slug = Str::slug($item->product_name);
                                                    @endphp
                                                    
                                                    <a href="{{ route('pages.product_details_page', $slug) }}" target="_blank">
                                                        <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="">
                                                    </a>
                                                </td>
                                                <td><a href="{{ route('pages.product_details_page', $slug) }}" target="_blank">{{ $item->product_name }}</a></td>
                                                <td>{{ $item->total_amount }}</td>
                                                <td>{{ $item->current_payment }}</td>
                                                <td>{{ $item->payable_amount }}</td>
                                                <td>{{ $item->total_amount }}</td>
                                                <td>
                                                    @if($item->is_order_cancle == "no")
                                                        <a href="{{ route('product.orders.cancle_my_orders', base64_encode($item->order_id)) }}" style="color: #05c505;"><b>Cancel Your Order</b></a>
                                                    @elseif($item->is_order_cancle == "yes")
                                                        <b style="color: #e20505;">Your Order Has Been Canceled</b>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                @else
                    <section class="data_not_found d-flex align-items-center justify-content-center flex-column">
                        <img src="{{ asset("assets/img/no_result_found.png") }}" style="width: 250px;" alt="No result found" />                  
                        <h2 class="my-2"><b>Sorry, no results found!</b></h2>
                        <small><small>Get Help- +91 7763999333</small></small>
                    </section><!--./data_not_found-->
                @endif
                
            </section><!--./my_cart-->

            
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

        <!--================================== External script writing ============================-->
        <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--================================== Internal script writing ============================-->
        <script>
            $(document).ready(function(){

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