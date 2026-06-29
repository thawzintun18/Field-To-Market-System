@extends('farmer.layout.main')

@section('content')
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            @php
                $colors = ['primary', 'success', 'danger', 'warning', 'info', 'dark'];
            @endphp

            <div class="d-md-flex justify-content-center">
                <h3 class="fw-bold">ပိုင်ဆိုင်ထားသောသီးနှံများ</h3>

                <div class="slider">
                    <div class="slide-track">

                        @if ($crops->count() > 0)
                            @foreach ($crops as $crop)
                                <form action="{{ route('farmer#editCrop', $crop->id) }}" method="GET"
                                    style="display:inline;">

                                    <button class="btn btn-outline-{{ $colors[array_rand($colors)] }}">
                                        {{ $crop->name }}
                                    </button>

                                </form>
                            @endforeach
                        @else
                            <div class="d-flex justify-content-center">
                                <h5 class=" text-primary">သီးနှံများမရှိသေးပါ</h5>
                            </div>
                        @endif

                    </div>
                </div>
            </div>

            <div class="d-md-flex justify-content-between my-5">
                <div class="d-flex justify-content-start">
                    <h3 class=" fw-bold">စိုက်ပျိုးမြေစာရင်း</h3>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="d-md-flex justify-content-end mt-1">
                        <div class=" me-2">
                            <a href="{{ route('farmer#directPage') }}" class=" add-btn"><i
                                    class=" me-2 fa-solid fa-plus"></i>စိုက်ပျိုးမြေများထပ်ထည့်ရန်</a>
                        </div>
                        <div class=" mt-md-0 mt-4">
                            <a href="{{ route('farmer#addCrop') }}" class=" add-btn"><i
                                    class=" me-2 fa-solid fa-plus"></i>သီးနှံအသစ်ထပ်ထည့်ရန်</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row g-5">

                @if ($farmer->count() > 0)
                    @foreach ($farmer as $item)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item">
                                <div class="">
                                    <img src=" {{ asset('FarmerImages/' . $item->image) }} " class=" rounded-3"
                                        width="100%" height="150px" alt="">
                                </div>
                                <p class=" mt-3">စိုက်ပျိုးမြေ၏ အချက်အလက်များ</p>
                                <div class="d-flex justify-content-between">
                                    <p>လတ္တီကျု</p>
                                    <p class="fs-5 fw-100">{{ $item->latitude }} ° N</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>လောင်ဂျီကျု</p>
                                    <p class="fs-5 fw-100">{{ $item->longitude }} ° E</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>စိုက်ပျိုးမြေဧက</p>
                                    <p class="fs-5 fw-100">{{ $item->farm_size_acre }} ဧက</p>
                                </div>
                                <div class=" d-flex justify-content-center my-2">
                                    <a href="{{ route('farmer#detail', $item->id) }}"
                                        class=" mx-1 btn btn-outline-primary"><i
                                            class="fa-solid fa-eye fs-md-5 fs-4"></i></a>
                                    <a href="{{ route('farmer#edit', $item->id) }}"
                                        class="mx-1 btn btn-outline-secondary"><i
                                            class="fa-solid fa-pen-to-square fs-md-5 fs-4"></i></a>
                                    <button class="mx-1 btn btn-outline-danger"
                                        onclick="DeleteData({{ $item->id }})"><i
                                            class="fa-solid fa-trash fs-md-5 fs-5"></i></button>
                                </div>
                                <a href="{{ route('farmer-crop#directPage' , ["farmer_id" => $item->id]) }}" class="service-link">
                                    <span>သီးနှံများစိုက်ပျိုးရန်</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                @else
                    <div class="d-flex justify-content-center">
                        <h5 class=" text-primary">စိုက်ပျိုးမြေများမရှိသေးပါ</h5>
                    </div>
                @endif

            </div>

        </div>

    </section><!-- /Featured Services Section -->
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
                        text: "စိုက်ပျိုးမြေ အချက်အလက်ကို အောင်မြင်စွာ ဖျက်ပြီးပါပြီ။",
                        icon: "success"
                    }).then(() => {
                        location.href = '/farmer/farmer/delete/' + id;
                    });

                }

            });
        }
    </script>
@endsection
