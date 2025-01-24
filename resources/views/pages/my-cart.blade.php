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
        <!--================================== External file link's ===============================-->
        <link href="{{ asset("assets/css/frontend/bootstrap-grid.min.css") }}" rel="stylesheet" />
        <!--================================== Internal file link's ===============================-->
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/common.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/navbar.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/footer.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/my-cart.css") }}" />
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
            <!--==================== Start my_cart_box section ===================-->
            <section class="my_cart">
                <div class="container">

                    <div class="heading">
                        <p>My-Cart</p>
                    </div>
                    
                    <div class="row">
                        <div class="item item1 col-12 col-lg-9 mx-auto">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th style="width: 50%;">Name</th>
                                        <th>
                                           <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                Price
                                           </div>
                                        </th>
                                        <th>Quanitty</th>
                                        <th>
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                                                </svg>
                                                Total
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="pt-4">

                                    <tr>
                                        <td class="d-flex align-items-center gap-15px">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                                            </svg>                                              
                                            <svg style="color: var(--secondary-color);" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                            </svg>                                              
                                            <img src="{{ asset("assets/img/computer.png") }}" width="100" alt="">
                                        </td>
                                        <td style="width: 50%;">
                                            <p class="p_name">
                                                Ultra Wireless S50 Headphones S50 with Bluetooth
                                            </p>
                                        </td>
                                        <td>
                                            3000
                                        </td>
                                        <td>
                                            32000
                                        </td>
                                        <td>
                                            400
                                        </td>
                                    </tr><!--./item-->

                                    <tr>
                                        <td class="d-flex align-items-center gap-15px">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                                            </svg>                                              
                                            <svg style="color: var(--secondary-color);" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                            </svg> 
                                            <img src="{{ asset("assets/img/computer.png") }}" width="100" alt="">
                                        </td>
                                        <td style="width: 50%;">
                                            <p class="p_name">
                                                Ultra Wireless S50 Headphones S50 with Bluetooth
                                            </p>
                                        </td>
                                        <td>
                                            3000
                                        </td>
                                        <td>
                                            32000
                                        </td>
                                        <td>
                                            400
                                        </td>
                                    </tr><!--./item-->

                                </tbody>
                            </table>
                        </div>

                        <div class="coupan_section col-12 col-lg-9 mx-auto d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between gap-15px">
                            
                            <form action="#" class="coupan_code_form" method="POST">
                                <div class="input_box d-flex">
                                    <input type="text" placeholder="Enter Coupne Number...">
                                    <button type="button" class="btn">Apply Coupne</button>
                                </div>
                            </form>

                            <div class="checkout_box">
                                <button class="checout_btn btn d-flex align-items-center">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                    </svg>                                      
                                    Pay Now
                                </button>
                            </div>
                        </div>

                        <div class="col-12 col-lg-9 mx-auto d-flex justify-content-md-end">
                            <ul class="cart_total col-12 col-md-5">
                                <li>
                                    <b class="title">Cart Totals</b>
                                </li><br/>
                                <li>
                                    <span>Subtotle</span>
                                    <span>30000</span>
                                </li>
                                <li>
                                    <span>GST</span>
                                    <span>12%</span>
                                </li>
                                <li>
                                    <span>Delivery Charges</span>
                                    <span>40 Rs</span>
                                </li>
                                <li>
                                    <span>Total</span>
                                    <span>40000</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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

        <!--================================== internal file link's ===============================-->
        {{-- <script src="{{ asset("assets/js/jquery.min.js") }}"></script> --}}
        <!--================================== internal script writing ============================-->
        <script>

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

            // Logic to show product name in ellipsis format
            document.querySelectorAll(".p_name").forEach((item, ind) => {
                let text = item.textContent.trim();
                if (text.length > 60) {
                    let truncatedText = text.slice(0, 60) + "...";
                    item.textContent = truncatedText;
                }
            });


        </script>
    </body>
</html>