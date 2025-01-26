{{-- Include the common admin layoutes --}}
@extends("admin.layoutes")

{{-- Logic to push dynamicly style link in head section --}}
@push("style")
    <link rel="stylesheet" href="{{ asset("assets/css/backend/dashbord.css") }}" />
@endpush

<!--====================================== Start main section =====================================-->
@section("main_section")
    <main class="mb-5">

        <div class="container">
            <div class="row">

                <section class="left col-12 col-lg-8 order-2 order-lg-1">
                    
                    <section class="today_orders">

                        <div class="heading d-flex justify-content-between align-items-center">
                            <div>
                                <p class="order-lg-first">Today orders</p>
                                <small><script>document.write((new Date).toLocaleDateString())</script></small>
                            </div>
                            <button>
                                <a href="#">
                                    View All
                                </a>
                            </button>
                        </div><!--./heading-->

                        <div class="table_box mt-4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>User id</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                </tbody>
                            </table>
                        </div><!--./table_box-->

                    </section><!--./today_orders-->

                    <section class="new_users mt-4">

                        <div class="heading d-flex justify-content-between align-items-center">
                            <div>
                                <p class="order-lg-first">New users</p>
                            </div>
                            <button>
                                <a href="#">
                                    View All
                                </a>
                            </button>
                        </div><!--./heading-->

                        <div class="table_box mt-4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone no</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                </tbody>
                            </table>
                        </div><!--./table_box-->

                    </section><!--./new_users-->

                    <section class="stock_overview mt-4">

                        <div class="heading d-flex justify-content-between align-items-center">
                            <div>
                                <p class="order-lg-first">Stock oveview</p>
                            </div>
                            <button>
                                <a href="#">
                                    View All
                                </a>
                            </button>
                        </div><!--./heading-->

                        <div class="table_box mt-4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Product name</th>
                                        <th>Unit</th>
                                        <th>Abalable qty</th>
                                        <th>Product id</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Apple microphone wireless rechargable earephone
                                        </td>
                                        <td>
                                            2000
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <small style="color: #e4c205;">Pending</small>
                                            <small style="color: #03e603;">Delevered</small>
                                            <small style="color: #3767fa;">On the way</small>
                                            <small style="color: #fc1b26;">Cancled</small>
                                        </td>
                                    </tr><!--./item-->

                                </tbody>
                            </table>
                        </div><!--./table_box-->

                    </section><!--./stock_overview-->

                </section><!--./left-->

                <section class="right mt-4 mt-lg-0 mb-5 mb-lg-0 col-12 col-lg-4 order-1 order-lg-2">
                    <div class="row" style="row-gap: 20px;">

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item1 d-flex align-items-center justify-content-center flex-column">
                                <b>30</b>
                                Today orders
                            </div>
                        </div><!--./item-->
                        
                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item2 d-flex align-items-center justify-content-center flex-column">
                                <b>13</b>
                                Pending orders
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item3 d-flex align-items-center justify-content-center flex-column">
                                <b>2</b>
                                Cancled orders
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item4 d-flex align-items-center justify-content-center flex-column">
                                <b>25</b>
                                On way orders
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item5 d-flex align-items-center justify-content-center flex-column">
                                <b>27</b>
                                Total orders
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item6 d-flex align-items-center justify-content-center flex-column">
                                <b>27</b>
                                Users
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item7 d-flex align-items-center justify-content-center flex-column">
                                <b>30</b>
                                Parent categories
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item8 d-flex align-items-center justify-content-center flex-column">
                                <b>33</b>
                                Categories
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item9 d-flex align-items-center justify-content-center flex-column">
                                <b>37</b>
                                Brands
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item10 d-flex align-items-center justify-content-center flex-column">
                                <b>26</b>
                                Unites
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item11 d-flex align-items-center justify-content-center flex-column">
                                <b>143</b>
                                Products
                            </div>
                        </div><!--./item-->

                        <div class="col-6 col-sm-3 col-lg-6 col-xl-4">
                            <div class="item item12 d-flex align-items-center justify-content-center flex-column">
                                <b>30</b>
                                Disactive users
                            </div>
                        </div><!--./item-->

                    </div>
                </section><!--./right-->

            </div>

        </div><!--./container-->
        
    </main><!--./main-->
@endsection
