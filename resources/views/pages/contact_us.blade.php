<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yendo Ecommerce | Contact-Us | Online electronic shop</title>
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
        <link rel="stylesheet" href="{{ asset("assets/css/frontend/contact_us.css") }}" />
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
            
            <!--================= Start get_update_section section ===============-->
            <section class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d57794.703032792844!2d86.76174490000001!3d25.129978700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1737913770197!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section><!--./location-->
            
            <!--===================== Start send_message_box =====================-->
            <section class="send_message_box my-5">

                <div class="container">
                    <div class="row first_row justify-content-between">

                        <div class="left order-2 order-md-1 col-12 col-md-7">
                            <form action="#" class="login_form" method="POST">

                                <div class="form_heading">
                                    <p>Send me messages</p>
                                    <div class="line"></div>
                                </div><!--./form_heading-->

                                <p class="slogon">If you have any questions or face any issues with our website or store, feel free to reach out to us. We are here to help!</p>

                                <div class="input_label m-0">
                                    <div class="row p-0 m-0 m-md-2 px-0">
                                        <div class="col-12 col-lg-6 ps-0">
                                            <div class="input_box m-0">
                                                <label for="#first_name">First name <span style="color: #ff022c;">*</span></label>
                                                <input type="text" name="first_name" id="first_name" placeholder="First name" />
                                            </div><!--./input_box-->
                                        </div>
    
                                        <div class="col-12 col-lg-6 ps-0 ps-lg-2 pe-0 second">
                                            <div class="input_box m-0">
                                                <label for="#last_name">Last name <span style="color: #ff022c;">*</span></label>
                                                <input type="text" name="last_name" id="last_name" placeholder="Last name" />
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--input_label-->

                                <div class="input_box">
                                    <label for="#email">Email <span style="color: #ff022c;">*</span></label>
                                    <input type="email" name="email" id="email" placeholder="Email" />
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#phone">Phone <small>(optional)</small></label>
                                    <input type="text" name="phone" id="phone" placeholder="Phone" />
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#subject">Subject<span style="color: #ff022c;">*</span></label>
                                    <select name="subject" id="subject">
                                        <option value="product details" selected>Product Details</option>
                                        <option value="store information">Store Information</option>
                                        <option value="complaint">Report an Issue</option>
                                        <option value="franchise inquiry">Franchise Inquiry</option>
                                        <option value="others">Others</option>
                                    </select>                                    
                                </div><!--./input_box-->

                                <div class="input_box">
                                    <label for="#Message">Message<span style="color: #ff022c;">*</span></label>
                                    <textarea name="message" id="message" rows="7" placeholder="Write your message here"></textarea>
                                </div><!--./input_box-->

                                <button type="submit" class="submit_btn login_submit_btn btn">
                                    Send
                                </button><!--./submit_btn--><br/>

                            </form>
                        </div><!--./left-->

                        <div class="right order-1 order-md-2 col-12 col-md-4">
                            <div class="form_heading">
                                <p>Stroe Informations</p>
                                <div class="line"></div>
                            </div><!--./form_heading-->
                            <br/>
                            <p class="slogon">Bihar bhagalpur nathnagar muslim meritery school railway station</p>
                            <br/>
                            
                            <small><b>Opening and Closing time</b></small>
                            <ul class="mt-2">
                                <li class="mb-2">
                                    <small class="d-flex">
                                        <span style="width: 130px;">Monday</span>
                                        <span>11AM-9PM</span>
                                    </small>
                                </li>
                                <li class="mb-2">
                                    <small class="d-flex">
                                        <span style="width: 130px;">Tuesday</span>
                                        <span>11AM-9PM</span>
                                    </small>
                                </li>
                                <li class="mb-2">
                                    <small class="d-flex">
                                        <span style="width: 130px;">Wednsday</span>
                                        <span>11AM-9PM</span>
                                    </small>
                                </li>
                                <li class="mb-2">
                                    <small class="d-flex">
                                        <span style="width: 130px;">Friday</span>
                                        <span>11AM-9PM</span>
                                    </small>
                                </li>
                                <li class="mb-2">
                                    <small class="d-flex">
                                        <span style="width: 130px;">Friday</span>
                                        <span>11AM-9PM</span>
                                    </small>
                                </li>
                                <li class="mb-2">
                                    <small class="d-flex">
                                        <span style="width: 130px;">Sunday</span>
                                        <span>11AM-9PM</span>
                                    </small>
                                </li>
                            </ul>
                            <br/>
                            <ul class="socal_media">
                                <li class="mb-2">
                                    <small>
                                        <a href="#" class="d-flex align-items-center">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                                            </svg>                                          
                                            +91 9065608408
                                        </a>
                                    </small>
                                </li>

                                <li class="mb-2">
                                    <small>
                                        <a href="#" class="d-flex align-items-center">
                                            <svg style="color: #04cf04;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                            </svg>                                                                                       
                                            +91 9065608408
                                        </a>
                                    </small>
                                </li>

                                <li class="mb-2">
                                    <small>
                                        <a href="#" class="d-flex align-items-center">
                                            <svg style="color: #ff022c;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
                                            </svg> 
                                            BBC COMPUTERS SHOP
                                        </a>
                                    </small>
                                </li>

                                <li class="mb-2">
                                    <small>
                                        <a href="#" class="d-flex align-items-center">
                                            <svg style="color: #ff1b49;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>                                                                                                                                                                                  
                                            @bbccomputershop
                                        </a>
                                    </small>
                                </li>

                                <li class="mb-2">
                                    <small>
                                        <a href="#" class="d-flex align-items-center">
                                            <svg style="color: #4070ff;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                                            </svg>                                                                                                                                                                                                                                
                                            BBC COMPUTER SHOP
                                        </a>
                                    </small>
                                </li>
                            </ul>
                            
                        </div><!--./right-->

                    </div>
                </div><!--./container-->
                
            </section><!--./send_message_box-->
            
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
    </body>
</html>