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
                    <div class="col-12 col-md-8 col-lg-8 col-xl-5 mx-auto">
                        <div class="form_box">
                            <form action="{{ route("admin.product.store") }}" method="POST" enctype="multipart/form-data" class="new_product_form">

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
                                                <input type="text" autofocus name="name" id="product_name" />
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">

                                        <div class="col-12 col-lg-4">
                                            <div class="input_box pb-3">
                                                <label for="new_price">NEW PRICE</label>
                                                <input type="number" name="new_price" id="new_price" />
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div class="input_box pb-3">
                                                <label for="selling_price">SELLING PRICE</label>
                                                <input type="number" name="selling_price" id="selling_price" />
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div class="input_box pb-3">
                                                <label for="discount_price">DISCOUNT PRICE</label>
                                                <input type="number" name="discount_price" id="discount_price" />
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>

                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        
                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="live_link">Live Prev Link</label>
                                                <input type="text" value="https://youtube.com/shorts/rtVbdyMbjRI?si=K7rZefMH4QvIh9Bg" name="live_link" id="live_link" />
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>
                                        
                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="total_quentity">Total Quantity</label>
                                                <input type="number" value="30" name="total_quentity" id="total_quentity" />
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>
                                        
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="unit">UNIT</label>
                                                <select name="unit" id="unit">
                                                    
                                                    @foreach ($unit_data as $item)
                                                        <option value="{{ $item->name }}" {{ ($item->name == "Pcs") ? "selected" : ""}} >{{ $item->name }}</option>                                                        
                                                    @endforeach
                                                    
                                                </select>
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="category_name">Category</label>
                                                <select name="category_name" id="category_name">
                                                    @foreach ($category_data as $item)
                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">

                                        <div class="col-12 col-lg-6">
                                            <div class="input_box pb-3">
                                                <label for="brand_name">Brand</label>
                                                <select name="brand_name" id="brand_name">
                                                    @foreach ($brand_data as $item)
                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
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
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>

                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_box pb-3" style="position: relative;">
                                                <label for="thumbnail_img" class="thumbnail_img d-flex flex-column align-items-center justify-content-center">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/>
                                                    </svg>                                                        
                                                    Uploads a thumbnail image
                                                    <small style="font-size: 12px; margin-top: 5px;">(SVG, JPG, JPEG, PNG, WEBP) And (< 1MB)</small>
                                                </label>
                                                <input type="file" name="thumbnail_img" id="thumbnail_img">
                                                
                                            </div><!--./input_box-->
                                            <small class="error">
                                                <big>Please enter your product name </big>   
                                            </small>
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_box pb-3" style="position: relative;">
                                                <label for="gallary_img" class="gallary_img d-flex flex-column align-items-center justify-content-center">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/>
                                                    </svg>                                                          
                                                    Uploads 5 Gallary Images
                                                    <small style="font-size: 12px; margin-top: 5px;">(SVG, JPG, JPEG, PNG, WEBP) And (< 1MB)</small>
                                                </label>
                                                <input type="file" multiple name="gallary_img[]" id="gallary_img">
                                            </div><!--./input_box-->
                                            
                                            <small class="error">
                                                <big>Please enter your product name </big>   
                                            </small>
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <div class="input_lavel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_box pb-3">
                                                <label for="product_discreption">PRODUCT DISCREPTION</label>
                                                <textarea name="product_discreption" id="product_discreption" rows="20" style="width: 100%; text-align: left;">{"model": "apple macbook pro a1466", "year": 2017, "processor": "intel i5 processor", "ram": "8gb ram", "storage": "128gb ssd , 256gb ssd", "ssd supported": "256gb not upgradable", "os supported": "macos monterey", "display": "13.3' hd antiglare", "graphics": "intel hd graphics", "optical drive": "false", "usb ports": 2, "vga ports": "no", "camera": "true", "mini display port": "thunderbolt", "number keys": "false", "audio": "speakers: high quality speakers and headphone jack: stereo headphone jack", "adapter": "true", "battery backup": "backup time 3hrs to 5hrs approx", "body": "metal", "note": "best for study purpus"  }</textarea>
                                                
                                                <small class="error">
                                                    <big>Please enter your product name </big>   
                                                </small>
                                            </div><!--./input_box-->
                                        </div>
                                    </div>
                                </div><!--./input_lavel-->

                                <button class="btn submit_btn mt-4 d-flex align-items-center justify-content-center" type="submit">
                                    Create Now
                                    <div class="spinner"></div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section><!--./create_new_products-->
        </div><!--./container-->
    </main>
@endsection

@push('script')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        $(document).ready(function(){

            // Logic to show preview thumbnail image
            $("#thumbnail_img").on("change", function(){
                let reader = new FileReader();
                reader.readAsDataURL(this.files[0]);
                
                reader.onload = function(){
                    $(".thumbnail_img").css({
                        "background": `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(${reader.result})`,
                        "background-size": "contain", 
                        "background-position": "center",
                        "background-repeat": "no-repeat",
                        "border": "3px dotted green"  
                    });
                    
                }
            });

            // Logic to show preview thumbnail image
            $("#gallary_img").on("change", function(){

                // Validation for gallary image
                let gallary_img_file = this.files;
                if(gallary_img_file.length == 5){

                    for(let item of gallary_img_file){
                        if(["image/jpg", "image/jpeg", "image/png", "image/svg", "image/webp", "image/svg+xml"].includes(item.type)){
                            if(item.size > 50000000){
                                
                                this.style.borderColor="red";
                                $(".gallary_img").css({"border-color":"red"})
                                gallary_img.parentElement.parentElement.lastElementChild.style.display = "block";
                                gallary_img.parentElement.parentElement.lastElementChild.innerText = "Image size must be lass the 1MB.";
                                return false; 
                            }else{
                                this.style.borderColor="green";
                                gallary_img.parentElement.parentElement.lastElementChild.style.display = "none";
                                $(".gallary_img").css({"border-color":"green"})
                            }
                        }else{
                            this.style.borderColor="red";
                            $(".gallary_img").css({"border-color":"red"})
                            gallary_img.parentElement.parentElement.lastElementChild.style.display = "block";
                            gallary_img.parentElement.parentElement.lastElementChild.innerText = "Invalid image type. Please upload a JPG, JPEG, PNG, SVG, or WEBP formate.";
                            return false; 
                        }
                    }
                }else{
                    
                    this.style.borderColor="red";
                    $(".gallary_img").css({"border-color":"red"})
                    gallary_img.parentElement.parentElement.lastElementChild.style.display = "block";
                    gallary_img.parentElement.parentElement.lastElementChild.innerText = "Please select 5 gallary images.";
                    return false;
                }
    
            });
            
            
            // Logic to make a ajax request for stored new product 
            $(".new_product_form").on("submit", function(event){
                
                event.preventDefault();

                // Logic to apply clint side validation
                // validation for product name
                if(product_name.value.trim() == ""){

                    product_name.focus();
                    product_name.style.borderColor="var(--color-danger)";
                    product_name.nextElementSibling.style.display = "block";
                    product_name.nextElementSibling.innerText = "Please your product name here."
                    return false;
                }else if(product_name.value.trim().length > 255){
                    
                    product_name.focus();
                    product_name.style.borderColor="var(--color-danger)";
                    product_name.nextElementSibling.style.display = "block";
                    product_name.nextElementSibling.innerText = "Product name can not be greater then 255 characters."
                    return false;
                }else{

                    product_name.style.borderColor="var(--shadow-color)";
                    product_name.nextElementSibling.style.display = "none";   
                }

                // Validation for New price
                if(new_price.value.trim() == ""){

                    new_price.focus();
                    new_price.style.borderColor="var(--color-danger)";
                    new_price.nextElementSibling.style.display = "block";
                    new_price.nextElementSibling.innerText = "Please enter New price."
                    return false;
                }else if(new_price.value.trim() > 500000){

                    new_price.focus();
                    new_price.style.borderColor="var(--color-danger)";
                    new_price.nextElementSibling.style.display = "block";
                    new_price.nextElementSibling.innerText = "New price must be less then Rs 500000."
                    return false;
                }else{

                    new_price.style.borderColor="var(--shadow-color)";
                    new_price.nextElementSibling.style.display = "none";   
                }

                // Validation for selling price
                if(selling_price.value.trim() == ""){

                    selling_price.focus();
                    selling_price.style.borderColor="var(--color-danger)";
                    selling_price.nextElementSibling.style.display = "block";
                    selling_price.nextElementSibling.innerText = "Please enter your selling price."
                    return false;
                }else if(selling_price.value.trim() > 500000){

                    selling_price.focus();
                    selling_price.style.borderColor="var(--color-danger)";
                    selling_price.nextElementSibling.style.display = "block";
                    selling_price.nextElementSibling.innerText = "Selling price must be less then Rs 500000."
                    return false;
                }else{

                    selling_price.style.borderColor="var(--shadow-color)";
                    selling_price.nextElementSibling.style.display = "none";   
                }

                // Validation for discount price
                if(discount_price.value.trim() == ""){

                    discount_price.focus();
                    discount_price.style.borderColor="var(--color-danger)";
                    discount_price.nextElementSibling.style.display = "block";
                    discount_price.nextElementSibling.innerText = "Please enter your discount price."
                    return false;
                }else if(discount_price.value.trim() > 500000){

                    discount_price.focus();
                    discount_price.style.borderColor="var(--color-danger)";
                    discount_price.nextElementSibling.style.display = "block";
                    discount_price.nextElementSibling.innerText = "Discount price must be less then Rs 500000."
                    return false;
                }else{

                    discount_price.style.borderColor="var(--shadow-color)";
                    discount_price.nextElementSibling.style.display = "none";   
                }

                // Validation for live preview link
                if(live_link.value.trim() == ""){

                    live_link.focus();
                    live_link.style.borderColor="var(--color-danger)";
                    live_link.nextElementSibling.style.display = "block";
                    live_link.nextElementSibling.innerText = "Please enter your product preview live link."
                    return false;
                }else if(live_link.value.trim().length > 500){

                    live_link.focus();
                    live_link.style.borderColor="var(--color-danger)";
                    live_link.nextElementSibling.style.display = "block";
                    live_link.nextElementSibling.innerText = "Live link must me less then 500 characters."
                    return false;
                }else{

                    live_link.style.borderColor="var(--shadow-color)";
                    live_link.nextElementSibling.style.display = "none";   
                }

                // Validation for total_quentity
                if(total_quentity.value.trim() == ""){

                    total_quentity.focus();
                    total_quentity.style.borderColor="var(--color-danger)";
                    total_quentity.nextElementSibling.style.display = "block";
                    total_quentity.nextElementSibling.innerText = "Please total quantity."
                    return false;
                }else if(total_quentity.value.trim() > 500000){

                    total_quentity.focus();
                    total_quentity.style.borderColor="var(--color-danger)";
                    total_quentity.nextElementSibling.style.display = "block";
                    total_quentity.nextElementSibling.innerText = "Total quantity must be less then Rs 500000."
                    return false;
                }else{

                    total_quentity.style.borderColor="var(--shadow-color)";
                    total_quentity.nextElementSibling.style.display = "none";   
                }

                // Validation for unit
                if(unit.value.trim() == ""){

                    unit.focus();
                    unit.style.borderColor="var(--color-danger)";
                    unit.nextElementSibling.style.display = "block";
                    unit.nextElementSibling.innerText = "Please select procut unit."
                    return false;
                }else if(unit.value.trim().length > 15){

                    unit.style.borderColor="var(--color-danger)";
                    unit.focus();
                    unit.nextElementSibling.style.display = "block";
                    unit.nextElementSibling.innerText = "unit must be less then 15 characters."
                    return false;
                }else{

                    unit.style.borderColor="var(--shadow-color)";
                    unit.nextElementSibling.style.display = "none";   
                }

                // Validation for category name
                if(category_name.value.trim() == ""){

                    category_name.focus();
                    category_name.style.borderColor="var(--color-danger)";
                    category_name.nextElementSibling.style.display = "block";
                    category_name.nextElementSibling.innerText = "Please select product category name."
                    return false;
                }else if(category_name.value.trim().length > 255){

                    category_name.style.borderColor="var(--color-danger)";
                    category_name.focus();
                    category_name.nextElementSibling.style.display = "block";
                    category_name.nextElementSibling.innerText = "Category name must be lass then 255 charactors."
                    return false;
                }else{

                    category_name.style.borderColor="var(--shadow-color)";
                    category_name.nextElementSibling.style.display = "none";   
                }

                // Validation for brand name
                if(brand_name.value.trim() == ""){

                    brand_name.focus();
                    brand_name.style.borderColor="var(--color-danger)";
                    brand_name.nextElementSibling.style.display = "block";
                    brand_name.nextElementSibling.innerText = "Please select product band name."
                    return false;
                }else if(brand_name.value.trim().length > 255){

                    brand_name.style.borderColor="var(--color-danger)";
                    brand_name.focus();
                    brand_name.nextElementSibling.style.display = "block";
                    brand_name.nextElementSibling.innerText = "Brand name must be lass then 255 charactors."
                    return false;
                }else{

                    brand_name.style.borderColor="var(--shadow-color)";
                    brand_name.nextElementSibling.style.display = "none";   
                }

                // Validation for product status
                if(product_status.value.trim() == ""){

                    product_status.focus();
                    product_status.style.borderColor="var(--color-danger)";
                    product_status.nextElementSibling.style.display = "block";
                    product_status.nextElementSibling.innerText = "Please select yor product status."
                    return false;
                }else if(product_status.value.trim().length > 255){

                    product_status.focus();
                    product_status.style.borderColor="var(--color-danger)";
                    product_status.nextElementSibling.style.display = "block";
                    product_status.nextElementSibling.innerText = "Product status must be lass then 255 charactors."
                    return false;
                }else if(!(["in stock", "out of stock", "up comming"].includes(product_status.value.toLowerCase().trim()))){

                    product_status.style.borderColor="var(--color-danger)";
                    product_status.focus();
                    product_status.nextElementSibling.style.display = "block";
                    product_status.nextElementSibling.innerText = "Invalid product status. Plese select In stock, Out of stock, Up comming."
                    return false;
                }else{

                    product_status.style.borderColor="var(--shadow-color)";
                    product_status.nextElementSibling.style.display = "none";   
                }

                // Validation for thumbnail image
                let thumb_img_file = thumbnail_img.files[0];
                if(!thumb_img_file){

                    $(".thumbnail_img")[0].style.borderColor="var(--color-danger)";
                    thumbnail_img.parentElement.parentElement.lastElementChild.style.display = "block";
                    thumbnail_img.parentElement.parentElement.lastElementChild.innerText = "Please select 1 thumbnail image.";
                    return false;
                }else if(!(["image/jpg", "image/jpeg", "image/png", "image/svg", "image/webp", "image/svg+xml"].includes(thumb_img_file.type))){

                    $(".thumbnail_img")[0].style.borderColor = "var(--color-danger)";
                    thumbnail_img.parentElement.parentElement.lastElementChild.style.display = "block";
                    thumbnail_img.parentElement.parentElement.lastElementChild.innerText = "Invalid image formate. Please upload a JPG, JPEG, PNG, SVG, or WEBP formate.";
                    return false;
                }else if(thumb_img_file.size > 50000000){

                    $(".thumbnail_img")[0].borderColor = "var(--color-danger)";
                    thumbnail_img.parentElement.parentElement.lastElementChild.style.display = "block";
                    thumbnail_img.parentElement.parentElement.lastElementChild.innerText = "Invalid image size. Image size can not be greater then 1MB.";
                    return false;
                }else{

                    $(".thumbnail_img")[0].style.borderColor="var(--shadow-color)";
                    thumbnail_img.parentElement.parentElement.lastElementChild.style.display = "none";
                }

                // Validation for gallary image
                let gallary_img_file = gallary_img.files;
                if(gallary_img_file.length == 5){

                    for(let item of gallary_img_file){
                        if(["image/jpg", "image/jpeg", "image/png", "image/svg", "image/webp", "image/svg+xml"].includes(item.type)){
                            if(item.size > 50000000){
                                
                                $(".gallary_img")[0].style.borderColor="var(--color-danger)";
                                gallary_img.parentElement.parentElement.lastElementChild.style.display = "block";
                                gallary_img.parentElement.parentElement.lastElementChild.innerText = "Image size must be lass the 1MB.";
                                return false; 
                            }else{
                                $(".gallary_img")[0].style.borderColor="var(--shadow-color)";
                                gallary_img.parentElement.parentElement.lastElementChild.style.display = "none";
                            }
                        }else{
                            $(".gallary_img")[0].style.borderColor="var(--color-danger)";
                            gallary_img.parentElement.parentElement.lastElementChild.style.display = "block";
                            gallary_img.parentElement.parentElement.lastElementChild.innerText = "Invalid image type. Please upload a JPG, JPEG, PNG, SVG, or WEBP formate.";
                            return false; 
                        }
                    }
                }else{
                    
                    $(".gallary_img")[0].style.borderColor="var(--color-danger)";
                    gallary_img.parentElement.parentElement.lastElementChild.style.display = "block";
                    gallary_img.parentElement.parentElement.lastElementChild.innerText = "Please select 5 gallary images.";
                    return false;
                }
    
                // Validation for product discreption
                if(product_discreption.value.trim() == ""){

                    live_link.focus();
                    product_discreption.style.borderColor="var(--color-danger)";
                    product_discreption.nextElementSibling.style.display = "block";
                    product_discreption.nextElementSibling.innerText = "Please enter your product discreption."
                    return false;
                }else{
                    product_discreption.style.borderColor="var(--shadow-color)";
                    product_discreption.nextElementSibling.style.display = "none";
                }

                $(".spinner").css("display", "block");
            
                // Logic to make a request
                let form_data = new FormData(this);
                $.ajax({
                    url: "{{ route("admin.product.store") }}",
                    type: "POST",
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    data: form_data,

                    success: function(resp){
                        
                        console.log(resp);
                        // return;
                        
                        $(".spinner").css("display", "none");
                        $(".new_product_form")[0].reset(); 

                        if(resp.status == "success"){
                            Swal.fire({
                                title: "Product created.",
                                text: "Product created successfully.",
                                icon: "success"
                            });
                        }else{
                            Swal.fire({
                                icon: "error",
                                title: "Error !",
                                text: "Unable to create product. Please try again latter!",
                            });
                        }
                    },

                    error: function(resp){

                        $(".spinner").css("display", "none");
                        $(".new_product_form")[0].reset(); 
                        Swal.fire({
                            icon: "error",
                            title: "Error !",
                            text: "Something went wrong. Please try again latter!",
                        });
                    }
                    
                });
                
            });
            
        });
    </script>
@endpush