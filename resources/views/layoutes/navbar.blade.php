<!--========================== Helpline no and Stroe location link =========================-->
<aside class="helpline_no_and_stroe_loc_link_box">
    <button class="helpline_link btn d-flex align-self-center justify-content-between">
        <a href="{{ route("pages.contact_us") }}" class="p-0" target="_blank">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
            </svg>&nbsp;
        </a>
        <a href="tel:7763999333" target="_blank">
            Helpline Number- &nbsp; <span style="letter-spacing: 0.6px; color: var(--forth-color);">7763999333</span>
        </a>
    </button><br/>
</aside>

<!--=============================== Start navbar section ===================================-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">

    <section class="nav_top">
        
        <div class="container search_bar d-flex align-items-center justify-content-between">

            <div class="left d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="{{ route("home") }}" class="d-flex align-items-center" style="gap: 5px;">
                        <img src="{{ asset("assets/img/logo.png") }}" alt="Logo" />
                        <b>𝗜𝗧 𝗖𝗔𝗥𝗘 𝗟𝗔𝗣𝗣𝗬</b>
                    </a>
                </div>
                <div class="search_box">
                    <form action="{{ route("pages.product_filter_page") }}" method="GET">
                        <div class="input_box d-flex align-items-center">
                            <input type="search" name="search" id="search_val" placeholder="Search by brand name , category or product...">
                            <select id="cat_val">
                                <option value="">All Categories</option>
                                @foreach ($categories_data as $item)
                                    <option value="{{ $item->name }}">
                                        {{ ($item->name == "Cpu") ? "CPU" : (($item->name == "Led Monitors") ? "LED Monitors" : $item->name) }}
                                    </option>
                                @endforeach
                            </select>
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
                    <a href="{{ route("pages.my_wishlist") }}" class="d-flex align-items-center">
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
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
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

                        <a href="{{ route("pages.my_cart") }}" class="btn_see_cart">See your cart</a>
                    </div>
                </button><!--./btn-->

                <button class="btn my_account pe-0">
                    <input type="checkbox" class="activ_disactive_checkbox activ_disactive_account" />
                    <div class="d-flex align-items-center">
                        <div class="img_box me-1 d-flex justify-content-center align-items-center">
                            @auth
                                <img src="{{ asset("storage/".Auth::user()->profile_img) }}" alt="My Image" width="26px" />
                                @else
                                <img src="{{ asset("assets/img/user_icon.png") }}" alt="">
                            @endauth
                        </div>
                        <span class="d-flex align-items-center">
                            My Account
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                            </svg>                              
                        </span>
                    </div>

                    <div class="active_box my_account_setting_box">
                        @auth
                            <img src="{{ asset("storage/".Auth::user()->profile_img) }}" alt="">
                            <p><b>Hello, {{ Auth::user()->full_name }}</b></p>
                            <span style="display: block !important;">{{ Auth::user()->email }}</span><br/><br/>
                            <a href="{{ route("pages.view-profile", base64_encode(Auth::id())) }}" class="btn_view_profile">View Profile</a>

                        @endauth

                        <ul>
                            <li>
                                <a href="{{ route("pages.my_wishlist") }}" class="d-flex align-items-center">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                    </svg>
                                    My Wishlist  
                                </a>
                            </li><!--./links-->

                            <li>
                                <a href="{{ route("pages.my_cart") }}" class="d-flex align-items-center">
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

                            {{-- Logic to check user is login or logout --}}
                            @guest
                                <li>
                                    <a href="{{ route("pages.signup_login_page") }}" class="d-flex align-items-center">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4m-2 2v-4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>
                                        
                                        Sign Up
                                    </a>
                                </li><!--./links-->

                                <li>
                                    <a href="{{ route("pages.signup_login_page") }}" class="d-flex align-items-center">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                                        </svg>
                                        Login
                                    </a>
                                </li><!--./links-->
                                @else

                                <li>
                                    <a href="{{ route("logout") }}" class="d-flex align-items-center">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                                        </svg>
                                        Logout
                                    </a>
                                </li><!--./links-->

                            @endguest
                            
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
                    <li><a href="{{ route("home") }}">Home</a></li>
                    @foreach ($categories_data as $item)
                        <li>
                            <a href="{{ route("pages.product_filter_page", $item->slug) }}">
                                {{ ($item->name == "Cpu") ? "CPU" : (($item->name == "Led Monitors") ? "LED Monitors" : $item->name) }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="btn_box saller_link d-none">
                    <button class="btn d-flex align-items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z"/>
                        </svg>
                        <span>Become a saller</span>
                    </button>
                </div>

                <!--This section is show only when user visit on product filter page-->
                <button class="btn filter_btn d-none">
                    <input type="checkbox" id="filter_btn_checkbox">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z"/>
                    </svg>
                    Filter
                </button>

            </div><!--./mune_list_box-->
        </div>
    </section><!--./nav_bottom-->
        
</nav><!--./navbar-->

<script>
    
    // Logic to perform active and disactive my_cart_list_box and my_account_setting_boxs
    function unchecked() {  // Function to uncheck all checkboxes
        document.querySelectorAll(".activ_disactive_checkbox").forEach(item => {
            item.checked = false;
        });
    }
    document.querySelectorAll(".activ_disactive_checkbox").forEach(item => {
        item.addEventListener("click", (event) => {
            if (!event.target.checked) {
                event.target.checked = false;
            } else {
                unchecked();
                event.target.checked = true;
            }
        });
    });

    document.querySelector(".search_box #cat_val").addEventListener("change", (event)=>{
        let cat_val = event.target.value;
        document.querySelector("#search_val").value = cat_val;
        
    });
    
</script>