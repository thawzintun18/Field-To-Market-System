@extends('farmer.layout.main')

@section('content')
    <div class="container">
        <div class="d-md-flex justify-content-between my-5">
            <div class="d-flex justify-content-start">
                <h3 class=" fw-bold">သီးနှံစိုက်ပျိုးမှုစာရင်း</h3>
            </div>
            <div class="d-flex justify-content-end mt-1">
                <a href="{{ route('farmer-crop#directPage') }}" class=" add-btn"><i
                        class=" me-2 fa-solid fa-plus"></i>စိုက်ပျိုးမှုအသစ်ထည့်ရန်</a>
            </div>
        </div>

        <div class=" d-flex justify-content-end my-3">
            <div class="">
                <form action="{{ route('farmer-crop#list') }}" method="GET">
                    <select name="farmer_id" class="form-select border border-2 border-primary rounded-5"
                        onchange="this.form.submit()">

                        <option value="">အားလုံးအတွက် ကြည့်ရန်</option>

                        @foreach ($farmer as $item)
                            <option value="{{ $item->id }}" {{ request('farmer_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->farm_size_acre }} ဧကအတွက် ကြည့်ရန်
                            </option>
                        @endforeach

                    </select>
                </form>
            </div>
        </div>

        <hr>

        <div class="row my-5">
            @if ($FarmerCrop->count() > 0)
                @foreach ($FarmerCrop as $item)
                    <div class="col-md-4 col-12 mt-3">
                        <div class="card shadow-sm border-0 h-100">

                            <!-- Card Image -->
                            <div class="position-relative">
                                <img src="{{ asset('FarmerImages/' . $item->image) }}" class="card-img-top"
                                    style="height:180px; object-fit:cover;" alt="Crop Image">

                                <!-- Dropdown -->
                                <div class="dropdown position-absolute top-0 end-0 m-2">
                                    <button class="btn btn-light btn-sm rounded-circle shadow-none" type="button"
                                        data-bs-toggle="dropdown">

                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">

                                        <li>
                                            <a class="dropdown-item" href="{{ route('farmer-crop#detail' , $item->id) }}">
                                                <i class="fa-solid fa-eye text-primary me-2"></i>
                                                အသေးစိတ်ကြည့်ရန်
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('farmer-crop#edit' , $item->id) }}">
                                                <i class="fa-solid fa-pen-to-square me-2"></i>
                                                ပြင်ရန်
                                            </a>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            {{-- <a class="dropdown-item text-danger" href="#">
                                                <i class="fa-solid fa-trash me-2"></i>
                                                ဖျက်ရန်
                                            </a> --}}
                                            <button class="dropdown-item text-danger"
                                                onclick="DeleteData({{ $item->id }})">
                                                <i class="fa-solid fa-trash me-2"></i>
                                                ဖျက်ရန်
                                            </button>
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <!-- Card Body -->
                            <div class="card-body">

                                <h5 class="card-title mb-2">
                                    {{ $item->name }}စိုက်ခင်း
                                </h5>

                                <div class="row mt-2">
                                    <div class="col-6">
                                        <p>စိုက်ပျိုးထားသောမြေဧက</p>
                                    </div>
                                    <div class="col-6">
                                        <p class=" fs-5 fw-100"> {{ $item->farm_size_acre }} ဧက</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <p>စိုက်ပျိုးသည့်နေ့</p>
                                    </div>
                                    <div class="col-6">
                                        <p class=" fs-5 fw-100"> {{ $item->planting_date }} </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <p>ခန့်မှန်းရိတ်သိမ်းမည့်နေ့</p>
                                    </div>
                                    <div class="col-6">
                                        <p class=" fs-5 fw-100"> {{ $item->estimated_harvest_date }} </p>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-6">
                                        <select class=" form-select status-change border border-2 border-success rounded-5"
                                            data-id="{{ $item->id }}">
                                            <option value="PLANTED" {{ $item->status == 'PLANTED' ? 'selected' : '' }}>
                                                စိုက်ပြီး
                                            </option>
                                            <option value="GROWING" {{ $item->status == 'GROWING' ? 'selected' : '' }}>
                                                ကြီးထွားနေဆဲ</option>
                                            <option value="HARVESTED" {{ $item->status == 'HARVESTED' ? 'selected' : '' }}>
                                                ရိတ်သိမ်းပြီး</option>
                                            <option value="READY_TO_SELL"
                                                {{ $item->status == 'READY_TO_SELL' ? 'selected' : '' }}>ဝယ်လို့ရပြီ
                                            </option>
                                            <option value="SOLD" {{ $item->status == 'SOLD' ? 'selected' : '' }}>
                                                ရောင်းပြီး
                                            </option>
                                            <option value="CANCELLED" {{ $item->status == 'CANCELLED' ? 'selected' : '' }}>
                                                ပျက်စီး</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        @if ($item->status == 'HARVESTED')
                                            <a href="#" class="btn btn-success rounded-5 px-3 w-100">
                                                ရိတ်သိမ်းမှု ဖြည့်ရန်
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <a href="#" class="btn btn-info rounded-5 px-3 w-100">
                                    ကုန်ကျစရိတ် ထည့်သွင်းရန်
                                </a>

                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <div class="d-flex justify-content-center">
                    <h5 class=" text-primary">သီးနှံစိုက်ပျိုးထားခြင်း မရှိသေးပါ</h5>
                </div>
            @endif

        </div>
    </div>
@endsection

@section('DeleteData')
    <script>
        function DeleteData(id) {
            Swal.fire({
                title: "သေချာပါသလား?",
                text: "ဖျက်ပြီးပါက ပြန်လည်ရယူ၍ မရနိုင်ပါ။",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ဖျက်မည်",
                cancelButtonText: "မဖျက်တော့ပါ"
            }).then((result) => {

                if (result.isConfirmed) {

                    Swal.fire({
                        title: "ဖျက်ပြီးပါပြီ!",
                        text: "သီးနှံစိုက်ပျိုးမှု အချက်အလက်ကို အောင်မြင်စွာ ဖျက်ပြီးပါပြီ။",
                        icon: "success"
                    }).then(() => {
                        location.href = '/farmer/farmer-crop/delete/' + id;
                    });

                }

            });
        }
    </script>
@endsection

@section('JS-content')
    <script>
        $(document).ready(function() {

            $('.status-change').on('change', function() {

                let status = $(this).val();
                let id = $(this).data('id');

                $.ajax({
                    url: "{{ route('farmer-crop#select') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id,
                        status: status
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'အောင်မြင်ပါသည်',
                                text: response.message
                            }).then(() => {
                                location.reload();
                            });
                        }
                    },
                    error: function(xhr) {
                        alert('Something went wrong');
                    }
                });

            });

        });
    </script>
@endsection
