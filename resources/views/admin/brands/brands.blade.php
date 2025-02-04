{{-- Include the common admin layoutes --}}
@extends("admin.layoutes")

{{-- Logic to push dynamicly style link in head section --}}
@push('style')
    <link rel="stylesheet" href="{{ asset("assets/css/admin/categories.css") }}" />
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
                            <p class="order-lg-first">Total brands <b>- {{ count($brand_data) }} </b></p>
                        </div>

                        <div class="create_new_btn">

                            <button>
                                <big>Create new +</big>
                            </button>

                            <input type="checkbox" class="create_new_checkbox" />
                            
                            <div class="create_form_box d-flex align-items-center justify-content-center">

                                <form action="{{ route('admin.brand.store') }}" enctype="multipart/form-data" method="POST" class="create_category_form"> 

                                    @method("POST")
                                    @csrf

                                    <div class="form_heading d-flex align-items-center justify-content-between">
                                        <p>Create new brand</p>
                                            
                                        <a class="close_btn" onclick="document.querySelector('.create_new_checkbox').checked = false;">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                                            </svg>
                                        </a>                                              
                                    </div><!--./form_heading--><br/><br/>

                                    <div class="input_box">

                                        <label for="brand_name">Brand name</label>
                                        <input type="text" value="Apple" name="name" id="brand_name" class="@error("brand_name") is_invalid @enderror" placeholder="Enter your brand name" />
                                        @error('brand_name')
                                            <small class="error d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div><!--./input_box--><br/>

                                    <div class="input_box">
                                        <label for="category_name">Select category</label>
                                        <select name="category_name" class="@error("category_name") is_invalid @enderror" id="category_name" required>
                                            @foreach ($category_name as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_name')
                                            <small class="error d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div><!--./input_box--><br/>

                                    <div class="input_box">
                                        <label for="brand_img">Brand image</label>
                                        <input type="file" name="brand_img" class="@error("brand_img") is_invalid @enderror"  id="brand_img">

                                        @error('brand_img')
                                            <small class="error d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div><!--./input_box--><br/>

                                    <input type="submit" value="Create Now" class="btn submit_btn mt-2" />

                                </form><!--./create_form_box-->

                            </div><!--./create_form_box-->

                        </div>
                    </div><!--./heading-->

                    <div class="table_box mt-4">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Brand name</th>
                                    <th>Category Name</th>
                                    <th>Brand Image</th>
                                    <th>Delete Button</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($brand_data as $item)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->category_name }}
                                        </td>
                                        <td>
                                            <img src="{{ asset("/storage/".$item->brand_img) }}" alt="" style="width: 70px; max-width: 100px;">
                                        </td>
                                        <td>
                                            <button>
                                                <a href="{{ route("admin.brand.destroy", base64_encode($item->id)) }}" class="delete_btn">
                                                    <svg style="color: #ee0606;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>
                                                </a>                                                  
                                            </button>
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