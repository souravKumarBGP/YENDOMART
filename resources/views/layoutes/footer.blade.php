<footer>

    <section class="footer_products">
        <div class="container">

            <div class="row" style="row-gap: 20px;">
    
                <div class="col-12 col-lg-4">
                    <div class="items_box">

                        <div class="heading">
                            <small><b>Premium Series Laptop</b></small>    
                            <div class="line mt-2"></div>
                        </div><!--./heading-->

                        @foreach ($prium_series_laptops as $item)
                            <div class="item">
                                
                                <div class="row">
                                    <div class="col-3">
                                        <div class="img_box">
                                            <a href="{{ route('pages.product_details_page', $item->slug) }}">
                                                <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="{{ $item->name }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="text_box d-flex flex-column align-content-between justify-content-between">
                                            
                                            <a href="{{ route('pages.product_details_page', $item->slug) }}" class="name">
                                                {{ $item->name }}
                                            </a>

                                            <div class="price_box d-flex align-items-center" style="gap: 10px;">
                                                <span style="font-size: 15px;">₹{{ $item->selling_price }}</span>
                                                <del style="color: gray;"><small>90000</small></del>
                                            </div>

                                            <div class="cart_box d-flex align-items-center justify-content-between">
                                                <div class="lef">
                                                    <button class="btn">
                                                        <a href="#" class="like_btn p-2 ps-0 me-1" data-id="{{ base64_encode($item->id) }}">
                                                            <svg style="color: #f40635;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                            </svg>                                                                                                                   
                                                        </a>
                                                    </button>

                                                    <button class="btn">
                                                        <a href="#" class="{{ ($item->product_status == "in stock") ? "add_cart_btn" : "" }} btn p-2" data-id="{{ base64_encode($item->id) }}">
                                                            <svg style="color: var(--primary-color);" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                            </svg>                                                          
                                                        </a>
                                                    </button>
                                                </div><!--./left-->
                                                <div class="right">

                                                    @if ($item->product_status == "in stock")
                                                        <b><small style="color: #07dd07;">In Stock</small></b>
                                                        
                                                    @elseif($item->product_status == "up comming")
                                                        <b><small style="color: #e7aa10;">Up Comming</small></b>
                                                    @else
                                                        <b><small style="color: #f66f6f;">Out Of Stock</small></b>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div><!--./item-->
                        @endforeach

                    </div>
                </div><!--./items_box-->
    
                <div class="col-12 col-lg-4">
                    <div class="items_box">

                        <div class="heading">
                            <small><b>For Business Purpus</b></small>    
                            <div class="line mt-2"></div>
                        </div><!--./heading-->

                        @foreach ($for_business_purpus as $item)
                            <div class="item">
                                
                                <div class="row">
                                    <div class="col-3">
                                        <div class="img_box">
                                            <a href="{{ route('pages.product_details_page', $item->slug) }}">
                                                <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="{{ $item->name }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="text_box d-flex flex-column align-content-between justify-content-between">
                                            
                                            <a href="{{ route('pages.product_details_page', $item->slug) }}" class="name">
                                                {{ $item->name }}
                                            </a>

                                            <div class="price_box d-flex align-items-center" style="gap: 10px;">
                                                <span style="font-size: 15px;">₹{{ $item->selling_price }}</span>
                                                <del style="color: gray;"><small>90000</small></del>
                                            </div>

                                            <div class="cart_box d-flex align-items-center justify-content-between">
                                                <div class="lef">
                                                    <button class="btn">
                                                        <a href="#" class="like_btn p-2 ps-0 me-1" data-id="{{ base64_encode($item->id) }}">
                                                            <svg style="color: #f40635;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                            </svg>                                                                                                                   
                                                        </a>
                                                    </button>

                                                    <button class="btn">
                                                        <a href="#" class="{{ ($item->product_status == "in stock") ? "add_cart_btn" : "" }} btn p-2"  data-id="{{ base64_encode($item->id) }}">
                                                            <svg style="color: var(--primary-color);" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                            </svg>                                                          
                                                        </a>
                                                    </button>
                                                </div><!--./left-->
                                                <div class="right">

                                                    @if ($item->product_status == "in stock")
                                                        <b><small style="color: #07dd07;">In Stock</small></b>
                                                        
                                                    @elseif($item->product_status == "up comming")
                                                        <b><small style="color: #e7aa10;">Up Comming</small></b>
                                                    @else
                                                        <b><small style="color: #f66f6f;">Out Of Stock</small></b>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div><!--./item-->
                        @endforeach

                    </div>
                </div><!--./items_box-->
    
                <div class="col-12 col-lg-4">
                    <div class="items_box">

                        <div class="heading">
                            <small><b>For Study Purpus Or Office Work</b></small>    
                            <div class="line mt-2"></div>
                        </div><!--./heading-->

                        @foreach ($for_studey_purpus_office_work as $item)
                            <div class="item">
                                
                                <div class="row">
                                    <div class="col-3">
                                        <div class="img_box">
                                            <a href="{{ route('pages.product_details_page', $item->slug) }}">
                                                <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="{{ $item->name }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="text_box d-flex flex-column align-content-between justify-content-between">
                                            
                                            <a href="{{ route('pages.product_details_page', $item->slug) }}" class="name">
                                                {{ $item->name }}
                                            </a>

                                            <div class="price_box d-flex align-items-center" style="gap: 10px;">
                                                <span style="font-size: 15px;">₹{{ $item->selling_price }}</span>
                                                <del style="color: gray;"><small>90000</small></del>
                                            </div>

                                            <div class="cart_box d-flex align-items-center justify-content-between">
                                                <div class="lef">
                                                    <button class="btn">
                                                        <a href="#" class="like_btn p-2 ps-0 me-1" data-id="{{ base64_encode($item->id) }}">
                                                            <svg style="color: #f40635;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                                            </svg>                                                                                                                   
                                                        </a>
                                                    </button>

                                                    <button class="btn">
                                                        <a href="#" class="{{ ($item->product_status == "in stock") ? "add_cart_btn" : "" }} btn p-2"  data-id="{{ base64_encode($item->id) }}">
                                                            <svg style="color: var(--primary-color);" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                                                            </svg>                                                          
                                                        </a>
                                                    </button>
                                                </div><!--./left-->
                                                <div class="right">

                                                    @if ($item->product_status == "in stock")
                                                        <b><small style="color: #07dd07;">In Stock</small></b>
                                                        
                                                    @elseif($item->product_status == "up comming")
                                                        <b><small style="color: #e7aa10;">Up Comming</small></b>
                                                    @else
                                                        <b><small style="color: #f66f6f;">Out Of Stock</small></b>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div><!--./item-->
                        @endforeach

                    </div>
                </div><!--./items_box-->
    
            </div>

        </div>

    </section><!--./product_box-->
    
    <section class="footer_links">

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
                                    <a href="tel:7763999333" class="d-flex">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.0225 4 14 8.98132m0 0 3.03.00002M14 8.98132V5.99998m4.2327 8.51492-1.1431-1.1439c-1.143-1.1439-1.9758-.3696-2.8382.4565-.3159.3161-.7443.4936-1.1911.4936-.4467 0-.8751-.1775-1.191-.4936L9.998 11.9549c-.65643-.6564-.92477-1.4591 0-2.38383.8488-.86837 1.6837-1.61177.4926-2.8037L9.2995 5.57544c-.90492-.90556-1.99137-.383-2.61843.23625-3.13257 3.1118-1.72021 6.77001 1.41066 9.90141s6.78747 4.5465 9.90477 1.4254c.1744-.1461.551-.565.6473-.7712.0962-.2062.1461-.4311.1461-.6587 0-.2277-.0499-.4525-.1461-.6588-.0963-.2062-.2366-.3888-.4111-.5349Z"/>
                                        </svg>
                                        +91 7763999333, +91 8792492507
                                    </a>

                                    <small>
                                        <a target="_blank" href="https://maps.app.goo.gl/eTYxbnAY83hiExFA6"><b>Address1 :</b> NA, Tatarpur Road, Tatarpur, Bhagalpur - 812002 (Near Petrol Pump)</a>
                                    </small>
                                    <small>
                                        <a target="_blank" href="https://maps.app.goo.gl/eTYxbnAY83hiExFA6"><b>Address2 :</b> NA, Tatarpur Road, Tatarpur, Bhagalpur - 812002 (Near Petrol Pump)</a>
                                    </small>
    
                                    <div class="socal_links_box d-flex">
    
                                        <button class="btn">
                                            <a target="_blank" href="https://maps.app.goo.gl/eTYxbnAY83hiExFA6">
                                                <svg style="color: #99061e;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                                </svg>                                                                                            
                                            </a>
                                        </button>
                                        
                                        <button class="btn">
                                            <a target="_blank" href="https://www.youtube.com/@itcarelappywala" class="d-flex align-items-center">
                                                <svg style="color: #ff022c;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
                                                </svg> 
                                            </a>                                        
                                        </button>
    
                                        <button class="btn">
                                            <a target="_blank" href="https://www.facebook.com/people/IT-Care-Lappywala/61561053075831/?mibextid=JRoKGi">
                                                <svg style="color: #4070ff;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                                                </svg>                                          
                                            </a>
                                        </button>
    
                                        <button class="btn">
                                            <a target="_blank" href="https://www.instagram.com/itcarelappywala/#">
                                                <svg style="color: #ff1b49;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                                </svg>                                          
                                            </a>
                                        </button>
    
                                        <button class="btn">
                                            <a target="_blank" href="mailto:muzaffarmustafa26@gmail.com">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                                                </svg>                                          
                                            </a>
                                        </button>
    
                                    </div>
    
                                    <div class="img_location mb-2">
                                        <a target="_blank" href="https://maps.app.goo.gl/eTYxbnAY83hiExFA6">
                                            <img src="{{ asset("assets/img/shop.jpg") }}" alt="">
                                        </a>
                                    </div>
    
                                </div>
                                
                            </div><!--./item-->
    
                            <div class="item item2 col-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="heading">
                                    <p>SORT LINKS</p>
                                </div>
    
                                <ul>
                                    <li><a href="{{ route("home") }}">Home</a></li>
                                    <li><a href="{{ route("pages.view-profile", base64_encode(Auth::id())) }}">My Profile</a></li>
                                    <li><a href="{{ route("pages.my-orders") }}">My Orders</a></li>
                                    <li><a href="{{ route("pages.my_cart") }}">My Cart</a></li>
                                    <li><a href="{{ route("pages.my_wishlist") }}">My Wishlist</a></li>
                                    <li><a href="{{ route("pages.view-profile", base64_encode(Auth::id())) }}">My Delivery Address</a></li>
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
                                    @foreach ($brands_data as $item)
                                        <li>
                                            <a href="{{ route("pages.product_filter_page", $item->slug) }}" target="_blank">
                                                {{ ($item->name) }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
    
                            </div><!--./item-->
    
                            <div class="item item5 col-12 col-sm-6">
                                <div class="heading">
                                    <p>Search by categoryies</p>
                                </div>
    
                                <ul>
                                    @foreach ($categories_data as $item)
                                        <li>
                                            <a href="{{ route("pages.product_filter_page", $item->slug) }}" target="_blank">
                                                {{ ($item->name == "Cpu") ? "CPU" : (($item->name == "Led Monitors") ? "LED Monitors" : $item->name) }}
                                            </a>
                                        </li>
                                    @endforeach
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
                    <a href="#" target="_blank" class="d-flex align-items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z"/>
                        </svg>
                        Become a saller  
                    </a>
                </li>
    
                <li>
                    <a class="d-flex align-items-center" href="{{ route("home") }}">
                        <svg style="m-0 p-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16.2877 9.42773C15.413 7.97351 13.8195 7 12 7 9.23999 7 7 9.23999 7 12 7 14.76 9.23999 17 12 17 13.8195 17 15.413 16.0265 16.2877 14.5723L14.5729 13.5442C14.0483 14.4166 13.0927 15 12 15 10.3425 15 9 13.6575 9 12 9 10.3425 10.3425 9 12 9 13.093 9 14.0491 9.58386 14.5735 10.4568L16.2877 9.42773ZM22 12C22 6.47998 17.52 2 12 2 6.47998 2 2 6.47998 2 12 2 17.52 6.47998 22 12 22 17.52 22 22 17.52 22 12ZM4 12C4 7.57996 7.57996 4 12 4 16.42 4 20 7.57996 20 12 20 16.42 16.42 20 12 20 7.57996 20 4 16.42 4 12Z"></path></svg>
                        2009-2015 itcare.com All right receved.
                    </a>
                </li>
    
                <li>
                    <a href="#" target="_blank" class="d-flex align-items-center" style="color: var(--primary-color);">
                        Developer: Sourav Rupani 
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </a>
                </li>
    
    
            </ul>
        </section><!--./footer_bottom-->

    </section><!--./footer_links-->
    
    <script>
        // Logic to show product name in ellipsis format
        document.querySelectorAll(".name").forEach(item => {
            let text = item.textContent.trim();
            if (text.length > 40) {
                item.textContent = text.slice(0, 40) + "...";
            }
        });
    </script>
</footer>