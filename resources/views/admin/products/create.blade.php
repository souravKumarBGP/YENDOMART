{{-- Include the common admin layoutes --}}
@extends("admin.layoutes")

{{-- Logic to push dynamicly style link in head section --}}
@push('style')
    <link rel="stylesheet" href="{{ asset("assets/css/admin/products/create.css") }}" />
@endpush

<!--====================================== Start main section =====================================-->
@section("main_section")
    <main>
        <div class="container">
            <section class="create_new_products">
                <div class="row">
                    <dic class="col-12 col-md-8 col-lg-8 col-xl-5 mx-auto">
                        <div class="form_box">
                            <form action="#" method="POST">

                                @csrf
                                @method("POST")
                                
                                <div class="form_heading pb-3 d-flex align-items-center justify-content-between">
                                    <p>Create new product</p>
                                    <button>
                                        <a href="{{ route("admin.products.index") }}" class="btn back_btn p-2">
                                            Back
                                        </a>
                                    </button>
                                </div><!--./form_heading-->

                                <div class="input_lavel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_box pb-3">
                                                <label for="product_name">PRODUCT NAME</label>
                                                <input type="text" name="name" id="product_name" />
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="selling_price">SELLING PRICE</label>
                                                <input type="number" name="selling_price" id="selling_price" />
                                            </div><!--./input_box-->
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="discount_price">DISCOUNT PRICE</label>
                                                <input type="number" name="discount_price" id="discount_price" />
                                            </div><!--./input_box-->
                                        </div>

                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        
                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="live_link">Live Prev Link</label>
                                                <input type="text" name="live_link" id="live_link" />
                                            </div><!--./input_box-->
                                        </div>
                                        
                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="quantity">QUANTITY</label>
                                                <input type="number" name="quantity" id="quantity" />
                                            </div><!--./input_box-->
                                        </div>
                                        
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="unite">UNITE</label>
                                                <select name="unite" id="unite">
                                                    <option value="">Select unite</option>
                                                    <option value="pcs">Pices</option>
                                                    <option value="box">Box</option>
                                                </select>
                                            </div><!--./input_box-->
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="category">Category</label>
                                                <select name="category" id="category">
                                                    <option value="">Select category</option>
                                                    <option value="laptops">Laptops</option>
                                                    <option value="tablets">Tablets</option>
                                                </select>
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="brand">Brand</label>
                                                <select name="brand" id="brand">
                                                    <option value="">Select brand</option>
                                                    <option value="samsung">Samsung</option>
                                                    <option value="apple">Apple</option>
                                                </select>
                                            </div><!--./input_box-->
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="product_status">PRODUCT STATUS</label>
                                                <select name="product_status" id="product_status">
                                                    <option value="">Select status</option>
                                                    <option value="in stock" selected>In Stock</option>
                                                    <option value="out of stock">Out of Stock</option>
                                                    <option value="up comming"> Up comming</option>
                                                </select>
                                            </div><!--./input_box-->
                                        </div>

                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_box pb-3">
                                                <div class="input_box pb-3" style="position: relative;">
                                                    <label for="thumbnail_img" class="thumbnail_img d-flex flex-column align-items-center justify-content-center">
                                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/>
                                                        </svg>                                                          
                                                        Uploads thumbnail image
                                                    </label>
                                                    <input type="file" name="thumbnail_img" id="thumbnail_img">
                                                </div><!--./input_box-->
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_box pb-3">
                                                <div class="input_box pb-3" style="position: relative;">
                                                    <label for="gallary_img" class="gallary_img d-flex flex-column align-items-center justify-content-center">
                                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/>
                                                        </svg>                                                          
                                                        Uploads 5 Gallary Images
                                                    </label>
                                                    <input type="file" multiple name="gallary_img" id="gallary_img">
                                                </div><!--./input_box-->
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_box pb-3">
                                                <label for="product_discreption">PRODUCT DISCREPTION</label>
                                                <textarea name="product_discreption" id="product_discreption" rows="20" style="width: 100%; text-align: left;">{ Modal:"Apple", Ram: 80GB, }</textarea>
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <button class="btn submit_btn mt-4" type="submit">Create Now</button>
                            </form>
                        </div>
                    </dic>
                </div>
            </section><!--./create_new_products-->
        </div><!--./container-->
    </main>
@endsection