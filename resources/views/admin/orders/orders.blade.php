{{-- Include the common admin layoutes --}}
@extends("admin.layoutes")

{{-- Logic to push dynamicly style link in head section --}}
@push('style')
    <link rel="stylesheet" href="{{ asset("assets/css/admin/categories.css") }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

<!--====================================== Start main section =====================================-->
@section("main_section")
    <section class="container">
        <main>
            <!--================== Start brand_section ===============-->
            <section class="categories_section">
                
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
                
                <div class="row">

                    <div class="heading d-flex justify-content-between align-items-center">
                        <div>
                            <p class="order-lg-first">Total orders <b>- {{ count($orders_data) }} </b></p>
                        </div>
                    </div><!--./heading-->

                    <div class="table_box mt-4">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>User id</th>
                                    <th>Product Id</th>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Current Pyment</th>
                                    <th>Due Amount</th>
                                    <th>Total Amount</th>
                                    <th>Payment Status</th>
                                    <th>Payment Methods</th>
                                    <th>Payment Id</th>
                                    <th>Order Id</th>
                                    <th>Booking Date Time</th>
                                    <th>Action</th>
                                    <th>Order Status</th>
                                    <th>Is Order Canceled</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders_data as $item)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            <a style="color: #2758ec;" class="p-3" href="{{ route("admin.user.search", base64_encode($item->user_id)) }}">{{ $item->user_id }}</a>
                                        </td>
                                        <td>
                                            {{ $item->product_id }}
                                        </td>
                                        <td>
                                            <img src="{{ asset("storage/".$item->thumbnail_img) }}" alt="{{ $item->product_name }}" style="width: 40px;">
                                        </td>
                                        <td>
                                            {{ $item->product_name }}
                                        </td>
                                        <td>
                                            {{ $item->current_payment }}
                                        </td>
                                        <td>
                                            {{ $item->payable_amount }}
                                        </td>

                                        <td>
                                            {{ $item->total_amount }}
                                        </td>
                                        <td>

                                            @if($item->payment_status == "success")
                                                <small style="color: #03e603;">Success</small>
                                                @elseif($item->payment_status == "panding")
                                                <small style="color: #e4c205;">Pending</small>
                                                @else
                                                <small style="color: #fc1b26;">Failed</small>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $item->payment_methods }}
                                        </td>
                                        <td>
                                            {{ $item->payment_id }}
                                        </td>
                                        <td>
                                            <a style="color: #2758ec;" href="{{ route("admin.orders.search", base64_encode($item->order_id)) }}">{{ $item->order_id }}</a>
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td style="text-align: center;">
                                            <a onclick="return confirm('Are you sure?. You want to delete this order')" href="{{ route("admin.orders.destroy", base64_encode($item->id)) }}">
                                                <svg style="color: #fc1b26; width: 20px;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="#" method="post" class="order_status_box">
                                                <input type="hidden" class="order_id" name="order_id" value="{{ $item->order_id }}">
                                                <label class="d-flex align-items-center" style="gap: 7px;">
                                                    <input type="radio" class="order_status" name="order_status" value="panding" {{ ($item->order_status == "panding") ? "checked" : "" }}> Panding
                                                </label>
                                                <label class="d-flex align-items-center mt-2" style="gap: 7px;">
                                                    <input type="radio" class="order_status" name="order_status" value="delivered" id="delivered_check_box"  {{ ($item->order_status == "delivered") ? "checked" : "" }}> Delivered
                                                </label>
                                            </form>
                                        </td>

                                        <td align="center">
                                            @if($item->is_order_cancle == "no")
                                                {{-- <a href="{{ route('product.orders.cancle_my_orders', base64_encode($item->order_id)) }}" style="color: #05c505;"><b>Cancel Your Order</b></a> --}}
                                                <b style="color: #06bb00;">NO</b>
                                            @elseif($item->is_order_cancle == "yes")
                                                <b style="color: #e20505;">YES</b>
                                            @endif
                                        </td>
                                        
                                    </tr><!--./item-->
                                @endforeach

                            </tbody>
                        </table>
                    </div><!--./table_box-->
                </div>
            </section><!--./unites_section-->
        </main>
    </section>
@endsection<!--./main_section-->

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script>
        $(document).ready(function(){
            
            // Logic to make a ajax request for change order status
            $(".order_status").on("click", function(event){

                event.preventDefault();
                
                let order_status_value = event.target.value;

                const order_id_val = event.target.parentElement.parentElement.querySelector(".order_id").value;

                // Loic to make a request
                $.ajax({
                    url: "{{ route("admin.orders-status.update" ) }}",
                    type: "POST",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {"order_status_val": order_status_value, "order_id": order_id_val},

                    success: function(resp){
                        if(resp.status == "success"){

                            event.target.checked = true;
                            
                            Swal.fire({
                                title: "Success",
                                text: "Order updated successfully.",
                                icon: "success"
                            });
                        }else{
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Unable to update order. Please try again latter!",
                            }); 
                        }
                    },

                    error: function(resp){
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Something want wrong. Please try again latter!",
                        });
                    }
                });
                
                
            });
            
        });
    </script>
@endpush

