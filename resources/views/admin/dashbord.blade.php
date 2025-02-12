{{-- Include the common admin layoutes --}}
@extends("admin.layoutes")

{{-- Logic to push dynamicly style link in head section --}}
@push("style")
    <link rel="stylesheet" href="{{ asset("assets/css/admin/dashbord.css") }}" />
@endpush

<!--====================================== Start main section =====================================-->
@section("main_section")
    <main class="mb-5" style="min-height: 70.3vh;">

        <div class="container">
            <div class="row">

                <section class="left col-12 col-lg-9 order-2 order-lg-1">
                    
                    <!--========== Start today orders section =============-->
                    <section class="today_orders">

                        <div class="heading d-flex justify-content-between align-items-center">
                            <div>
                                <p class="order-lg-first">Today Orders- {{ count($today_orders) }}</p>
                                <small><script>document.write(new Date().toLocaleDateString());</script></small>
                            </div>
                            <button>
                                <a href="{{ route("admin.orders.index") }}">
                                    View All
                                </a>
                            </button>
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
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($today_orders as $item)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $item->user_id }}
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
                                                {{ $item->order_id }}
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
                                        </tr><!--./item-->
                                    @endforeach


                                </tbody>
                            </table>

                            <div class="paginate mt-3 d-block">
                                {{ $today_orders->links("pagination::bootstrap-5") }}
                            </div>
                        </div><!--./table_box-->

                    </section><!--./today_orders-->

                    <!--========== Start new user section =============-->
                    <section class="new_users mt-4">

                        <div class="heading d-flex justify-content-between align-items-center">
                            <div>
                                <p class="order-lg-first">Total Users- {{ count($users_data) }}</p>
                            </div>
                            <button>
                                <a href="{{ route("admin.users.index") }}">
                                    View All
                                </a>
                            </button>
                        </div><!--./heading-->

                        <div class="table_box mt-4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Profile Image</th>
                                        <th>User Id</th>
                                        <th>Name</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Countary</th>
                                        <th>State</th>
                                        <th>District</th>
                                        <th>Pincode</th>
                                        <th>Famous Place</th>
                                        <th>Delivery Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users_data as $item)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                <img src="{{ asset("/storage/".$item->profile_img) }}" style="width: 50px;" alt="{{ $item->name }}">
                                            </td>
                                            <td>
                                                {{ $item->id }}
                                            </td>
                                            <td>
                                                {{ $item->full_name }}
                                            </td>
                                            <td>
                                                {{ $item->phone }}
                                            </td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                                {{ $item->countary }}
                                            </td>
                                            <td>
                                                {{ $item->state }}
                                            </td>
                                            <td>
                                                {{ $item->district }}
                                            </td>
                                            <td>
                                                {{ $item->pincode }}
                                            </td>
                                            <td>
                                                {{ $item->famous_place }}
                                            </td>
                                            <td>
                                                {{ $item->delivery_address }}
                                            </td>
                                            <td style="text-align: center;">
                                                <a onclick="return confirm('Are you sure?. You want to delete this order')" href="{{ route("admin.user.destroy", base64_encode($item->id)) }}">
                                                    <svg style="color: #fc1b26; width: 20px;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr><!--./item-->
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="paginate mt-3 d-block">
                                {{ $users_data->links("pagination::bootstrap-5") }}
                            </div>
                        </div><!--./table_box-->

                    </section><!--./new_users-->

                </section><!--./left-->

                <section class="right mt-4 mt-lg-0 mb-5 mb-lg-0 col-12 col-lg-3 order-1 order-lg-2">
                    <div class="row" style="row-gap: 20px;">

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item1 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($today_orders) }}</b>
                                <small>Today orders</small>
                            </div>
                        </div><!--./item-->
                        
                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item2 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($panding_order) }}</b>
                                <small style="white-space: nowrap;">Pending orders</small>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item3 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($canciled_order) }}</b>
                                <small style="white-space: nowrap;">Canciled Orders</small>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item6 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($users_data) }}</b>
                                <small style="white-space: nowrap;">Total Users</small>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item7 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($categories_data) }}</b>
                                <small style="white-space: nowrap;">Total Categories</small>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item8 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($brands_data) }}</b>
                                <small style="white-space: nowrap;">Total Brands</small>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item8 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($products_data) }}</b>
                                <small style="white-space: nowrap;">Total Products</small>
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item8 d-flex align-items-center justify-content-center flex-column">
                                <b>{{ count($unites_data) }}</b>
                                <small style="white-space: nowrap;">Total Unites</small>
                            </div>
                        </div><!--./item-->

                    </div>
                </section><!--./right-->

            </div>

        </div><!--./container-->
        
    </main><!--./main-->
@endsection
