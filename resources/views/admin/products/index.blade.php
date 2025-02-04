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
                    
                <div class="heading d-flex justify-content-between align-items-center">
                    <div>
                        <p class="order-lg-first">Total products- ( {{ count($product_data) }} )</p>
                    </div>
                    <button>
                        <a href="{{ route("admin.product.create") }}" class="py-1">
                            <big>Create New +</big>
                        </a>
                    </button>
                </div><!--./heading--><br/><br/>

                <div class="table_box mt-4">

                    @if(count($product_data) >= 1)
                        
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
                                    <th>Total Qty</th>
                                    <th>Ablable Qty</th>
                                    <th>Thumbnail image</th>
                                    <th>Product Status</th>
                                    <th>Action Button</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                @foreach ($product_data as $item)
                                    <tr>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            <a href="{{ $item->slug }}" class="product_name" style="color: #3767fa;">
                                                {{ $item->name }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $item->category_name }}
                                        </td>
                                        <td>
                                            {{ $item->brand_name }}
                                        </td>
                                        <td>
                                            {{ $item->unit }}
                                        </td>
                                        <td>
                                            {{ $item->sku }}
                                        </td>
                                        <td>
                                            {{ $item->selling_price }}
                                        </td>
                                        <td>
                                            {{ $item->total_quentity }}
                                        </td>
                                        <td>
                                            {{ $item->available_quentity }}
                                        </td>
                                        <td>
                                            <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="" style="max-height: 70px; width: 100%;">
                                        </td>
                                        <td>

                                            @if ($item->product_status == "in stock" && $item->available_quentity > 0)
                                                <small style="color: #02cd02;">In Stock</small>
                                            @elseif ($item->product_status == "up comming")
                                                <small style="color: #e4c205;">Up comming</small>
                                            @elseif($item->product_status == "Out of stock" && $item->available_quentity < 0)
                                                <small style="color: #fc1b26;">Out of stock</small>
                                            @endif
                                            
                                        </td>
                                        <td>
                                            
                                            <button class="btn action_btn show_btn">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                </svg>                                          
                                                <input type="checkbox" class="show_input_btn" value="{{ $loop->index }}">
    
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
    
                                                                {{-- {{ print_r($product_data[0]->gallary_img["img1"]) }} --}}
                                                                
                                                                <div class="col-6 col-sm-4 col-md-3">
                                                                    <div class="img_box d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset("storage/".$product_data[$loop->index]->gallary_img["img1"]) }}" alt="{{ $product_data[$loop->index]->name }}">
                                                                    </div>
                                                                </div><!--./img_box-->
    
                                                                <div class="col-6 col-sm-4 col-md-3">
                                                                    <div class="img_box d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset("storage/".$product_data[$loop->index]->gallary_img["img2"]) }}" alt="{{ $product_data[$loop->index]->name }}">
                                                                    </div>
                                                                </div><!--./img_box-->
    
                                                                <div class="col-6 col-sm-4 col-md-3">
                                                                    <div class="img_box d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset("storage/".$product_data[$loop->index]->gallary_img["img3"]) }}" alt="{{ $product_data[$loop->index]->name }}">
                                                                    </div>
                                                                </div><!--./img_box-->
    
                                                                <div class="col-6 col-sm-4 col-md-3">
                                                                    <div class="img_box d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset("storage/".$product_data[$loop->index]->gallary_img["img4"]) }}" alt="{{ $product_data[$loop->index]->name }}">
                                                                    </div>
                                                                </div><!--./img_box-->
    
                                                                <div class="col-6 col-sm-4 col-md-3">
                                                                    <div class="img_box d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset("storage/".$product_data[$loop->index]->gallary_img["img5"]) }}" alt="{{ $product_data[$loop->index]->name }}">
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
                                                                    {{ $product_data[$loop->index]->name }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Slug Name: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->slug }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Total Quantity: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->total_quentity }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Available Quentity: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->available_quentity }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Unit: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->unit }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Selling Price: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->selling_price }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Discount Price: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->discount_price }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Category Name: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->category_name }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Brand Name: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->brand_name }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        SKU: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->sku }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Product Status: 
                                                                    </b>
                                                                    {{ $product_data[$loop->index]->product_status }}
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <b>
                                                                        Live preview: 
                                                                    </b>
                                                                    <a href="{{ $product_data[$loop->index]->live_link }}" target="_blank" style="color: #3767fa;">This is live preview link</a>
                                                                </li>
                                                            </ul>

                                                            <br/>
                                                            <hr>
                                                            <!--Product discreption-->
                                                            <ul class="mt-3">
                                                                <p>Discreption</p><br/>

                                                                @foreach (json_decode($product_data[$loop->index]->product_discreption) as $key=> $val)
                                                                    <li class="d-flex align-items-center">
                                                                        <b>
                                                                            {{ ucwords($key) }}
                                                                        </b>
                                                                        :- &nbsp; {{ strtoupper($val) }}
                                                                    </li>
                                                                @endforeach
                                                                
                                                            </ul>
    
                                                        </div>
                                                        
                                                    </div>
                                                </section><!--./product_details_box-->
                                                
                                            </button><!--./show_btn-->
    
                                            <a href="{{ route('admin.product.edit', base64_encode($item->id)) }}">
                                                <button class="btn action_btn edit_btn">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                    </svg>                                          
                                                </button><!--./edit_btn-->
                                            </a>
    
                                            <form action="{{ route("admin.product.delete", base64_encode($item->id)) }}" method="POST" class="d-inline-block" >
                                                @csrf
                                                @method("DELETE")
                                                    
                                                <button class="btn action_btn delete_btn" type="submit">
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>                                          
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr><!--./item-->
                                @endforeach
    
                            </tbody>
                            
                        </table>
    
                        <div class="paginate mt-5">
                            {{ $product_data->links("pagination::bootstrap-5") }}
                        </div>
                    @else
                        <p style="text-align: center; font-size: 30px; font-width: bolder; color: var(--color-danger);">No Search Data</p>
                    @endif
                    
                </div><!--./table_box-->
                
            </section><!--./product_lists-->
            
        </div>
    </main>
@endsection

{{-- ******************* Logic to add dynamicly js file ***************** --}}
@push('script')
    <script>
        $(document).ready(function(){

            // Logic to close product details box when user click on close btn
            $(".close_btn").on("click", function() {
                $(".show_input_btn").prop("checked", false);
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

