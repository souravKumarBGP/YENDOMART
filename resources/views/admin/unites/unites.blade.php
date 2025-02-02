{{-- Include the common admin layoutes --}}
@extends("admin.layoutes")

{{-- Logic to push dynamicly style link in head section --}}
@push('style')
    <link rel="stylesheet" href="{{ asset("assets/css/admin/unites.css") }}" />
@endpush

<!--====================================== Start main section =====================================-->
@section("main_section")

    <section class="container">
        <main>
            
            
            <!--================== Start unites_section ===============-->
            <section class="unites_section">
                
                
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
                            <p class="order-lg-first">Total Unites <b>- 2 </b></p>
                        </div>

                        <div class="create_new_btn">

                            <button>
                                <big>Create new +</big>
                            </button>

                            <input type="checkbox" class="create_new_checkbox" />
                            
                            <div class="create_form_box d-flex align-items-center justify-content-center">

                                <form action="{{ route("admin.store_unite") }}" method="POST" class="create_unites_form"> 

                                    @method("POST")
                                    @csrf

                                    <div class="form_heading d-flex align-items-center justify-content-between">
                                        <p>Create new unite</p>
                                            
                                        <a class="close_btn" onclick="document.querySelector('.create_new_checkbox').checked = false;">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                                            </svg>
                                        </a>                                              
                                    </div><!--./form_heading--><br/><br/>

                                    <div class="input_box">
                                        <select name="name" class="@error("name") is_invalid @enderror" id="unite" required>
                                            <option value="">Select unit</option>
                                            <option value="pices">Pices</option>
                                            <option value="box">Box</option>
                                            <option value="kg">Kg</option>
                                            <option value="gram">Gram</option>
                                        </select>
                                        @error('name')
                                            <small class="error d-block">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div><!--./input_box--><br/><br/>

                                    <input type="submit" value="Create Now" class="btn submit_btn" />

                                </form><!--./create_form_box-->

                            </div><!--./create_form_box-->

                        </div>
                    </div><!--./heading-->

                    <div class="table_box mt-4">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            <button>
                                                <a href="{{ route("admin.destroy_unite", base64_encode($item->id)) }}" class="delete_btn">
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







