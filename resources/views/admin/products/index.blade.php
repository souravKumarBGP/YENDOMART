{{-- Include the common admin layoutes --}}
@extends("admin.layoutes")

{{-- Logic to push dynamicly style link in head section --}}
@push('style')
    <link rel="stylesheet" href="{{ asset("assets/css/admin/products/index.css") }}" />
@endpush

<!--====================================== Start main section =====================================-->
@section("main_section")
    <main>
        
        <!--=========== Start product list section ============-->
        <div class="container">

            <section class="product_lists">
                    
                <div class="heading d-flex justify-content-between align-items-center">
                    <div>
                        <p class="order-lg-first">Total products- (3)</p>
                    </div>
                    <button>
                        <a href="{{ route("admin.product.create") }}" class="py-1">
                            <big>Create New +</big>
                        </a>
                    </button>
                </div><!--./heading--><br/><br/>

                <div class="table_box mt-4">
                    <table>
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Name</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Unite</th>
                                <th>SKU</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Thumbnail image</th>
                                <th>Product Status</th>
                                <th>Action Button</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a href="#" class="product_name" style="color: #3767fa;">
                                        Apple microphone wireless rechargable earephone
                                    </a>
                                </td>
                                <td>
                                    Laptopes
                                </td>
                                <td>
                                    Samsung
                                </td>
                                <td>
                                    PCS
                                </td>
                                <td>
                                    SKU
                                </td>
                                <td>
                                    2300
                                </td>
                                <td>
                                    300
                                </td>
                                <td>
                                    <img src="{{ asset("assets/img/acer.png") }}" alt="" style="max-width: 80px;">
                                </td>
                                <td>
                                    <small style="color: #e4c205;">Pending</small>
                                    {{-- <small style="color: #03e603;">Delevered</small>
                                    <small style="color: #3767fa;">On the way</small>
                                    <small style="color: #fc1b26;">Cancled</small> --}}
                                </td>
                                <td>
                                    
                                    <button class="btn action_btn show_btn">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>                                          
                                        <input type="checkbox" id="show_input_btn">

                                        <!--======= Start product details box section =======-->
                                        <section class="product_details_box d-flex justify-content-center">
                                            <div class="product_details">
                                                
                                                <div class="heading d-flex align-items-center justify-content-between">
                                                    <p>View your product details</p>
                                                    <span class="close_btn btn d-flex align-items-center">
                                                        <svg style="color: var(--color-danger) !important;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                        </svg>                                                          
                                                    </span>
                                                </div><!--./heading-->
                                                
                                                <div class="gallary_img_box mt-5">
                                                    <p>Gallary Images</p>
                                                    <div class="row mt-4" style="row-gap: 20px;">

                                                        <div class="col-6 col-sm-4 col-md-3">
                                                            <div class="img_box d-flex align-items-center justify-content-center">
                                                                <img src="{{ asset("assets/img/acer.png") }}" alt="">
                                                            </div>
                                                        </div><!--./img_box-->

                                                        <div class="col-6 col-sm-4 col-md-3">
                                                            <div class="img_box d-flex align-items-center justify-content-center">
                                                                <img src="{{ asset("assets/img/acer.png") }}" alt="">
                                                            </div>
                                                        </div><!--./img_box-->

                                                        <div class="col-6 col-sm-4 col-md-3">
                                                            <div class="img_box d-flex align-items-center justify-content-center">
                                                                <img src="{{ asset("assets/img/acer.png") }}" alt="">
                                                            </div>
                                                        </div><!--./img_box-->

                                                        <div class="col-6 col-sm-4 col-md-3">
                                                            <div class="img_box d-flex align-items-center justify-content-center">
                                                                <img src="{{ asset("assets/img/acer.png") }}" alt="">
                                                            </div>
                                                        </div><!--./img_box-->

                                                        <div class="col-6 col-sm-4 col-md-3">
                                                            <div class="img_box d-flex align-items-center justify-content-center">
                                                                <img src="{{ asset("assets/img/acer.png") }}" alt="">
                                                            </div>
                                                        </div><!--./img_box-->

                                                        <div class="col-6 col-sm-4 col-md-3">
                                                            <div class="img_box d-flex align-items-center justify-content-center">
                                                                <video src="{{ asset("assets/video/video1.mp4") }}" controls></video>
                                                            </div>
                                                        </div><!--./img_box-->
                                                        
                                                    </div>
                                                </div><!--./gallary_img_box-->

                                                <div class="details my-5">
                                                    <p>Products Details</p>
                                                        
                                                    <ul class="mt-3">
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Product Name: 
                                                            </b>
                                                            Apple hightuch screen tuch portable with gap laptopes
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Slug Name: 
                                                            </b>
                                                            Apple hightuch screen tuch portable with gap laptopes
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Price: 
                                                            </b>
                                                            3000
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Category Name: 
                                                            </b>
                                                            Laptopes
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Brand Name: 
                                                            </b>
                                                            Samsung
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                SKU: 
                                                            </b>
                                                            ABC2342
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Status: 
                                                            </b>
                                                            Panding
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Live preview: 
                                                            </b>
                                                            <a href="#" target="_blank" style="color: #3767fa;">This is live preview link</a>
                                                        </li>
                                                    </ul>
                                                    <br/>
                                                    <hr>
                                                    <!--Product discreption-->
                                                    <ul class="mt-3">
                                                        <p>Discreption</p><br/>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Modal : 
                                                            </b>
                                                            Apple hightuch screen tuch portable with gap laptopes
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Year : 
                                                            </b>
                                                            2017
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Processor : 
                                                            </b>
                                                            Intel® i5 Processor
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                RAM : 
                                                            </b>
                                                            8GB RAM
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Storage : 
                                                            </b>
                                                            128GB Storage
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                SSD Support : 
                                                            </b>
                                                            Yes
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Processor : 
                                                            </b>
                                                            Intel® i5 Processor
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                OS Supported : 
                                                            </b>
                                                            Windows 11
                                                        </li>

                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Processor : 
                                                            </b>
                                                            Intel® i5 Processor
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Display : 
                                                            </b>
                                                            13.3'HD Antiglar
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Graphics : 
                                                            </b>
                                                            Intel HD Graphics
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Optical Device : 
                                                            </b>
                                                            No
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                USB : 
                                                            </b>
                                                            2
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Camera : 
                                                            </b>
                                                            YES
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Number Key : 
                                                            </b>
                                                            No
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Adapter : 
                                                            </b>
                                                            Yes
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Processor : 
                                                            </b>
                                                            Intel® i5 Processor
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Backup : 
                                                            </b>
                                                            Upto 3Hrs-5Hrs
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <b>
                                                                Body : 
                                                            </b>
                                                            Metal
                                                        </li>
                                                    </ul>

                                                </div>
                                                
                                            </div>
                                        </section><!--./product_details_box-->
                                        
                                    </button><!--./show_btn-->

                                    <a href="#">
                                        <button class="btn action_btn edit_btn">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                            </svg>                                          
                                        </button><!--./edit_btn-->
                                    </a>

                                    <a href="#">
                                        <button class="btn action_btn delete_btn">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>                                          
                                        </button>
                                    </a>
                                    
                                </td>
                            </tr><!--./item-->

                        </tbody>
                    </table>
                </div><!--./table_box-->
                
            </section><!--./product_lists-->
            
        </div>
    </main>
@endsection

{{-- ******************* Logic to add dynamicly js file ***************** --}}
@push('script')
    <script>
        $(document).ready(function(){

            $(".close_btn").on("click", function() {
                $("#show_input_btn").prop("checked", false);
            });
        
        
            // Logic to show product name in ellipsis format
            $(".product_name").each((ind, item) => {
                let text = $(item).text().trim();
                if (text.length > 20) {
                    let truncatedText = text.slice(0, 20) + "...";
                    $(item).text(truncatedText);
                }
            });
        });
    </script>
@endpush

