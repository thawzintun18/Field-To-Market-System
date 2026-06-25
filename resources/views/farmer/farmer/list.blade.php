@extends('farmer.layout.main')

@section('content')
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="d-md-flex justify-content-between my-5">
                <div class="d-flex justify-content-start">
                    <h3 class=" fw-bold">စိုက်ပျိုးမြေများ</h3>
                </div>
                <div class="d-flex justify-content-end mt-1">
                    <a href="{{ route('farmer#directPage') }}" class="add-btn"><i
                            class="fa-solid fa-plus"></i>စိုက်ပျိုးမြေများထပ်ထည့်ရန်</a>
                </div>
            </div>
            <div class="row g-5">

                @if ($farmer->count() > 0)
                    @foreach ($farmer as $item)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item">
                                <div class="">
                                    <img src=" {{ asset('FarmerImages/' . $item->image) }} " class=" rounded-3"
                                        width="100%" height="200px" alt="">
                                </div>
                                <p class=" mt-3">စိုက်ပျိုးမြေ၏ အချက်အလက်များ</p>
                                <div class="d-flex justify-content-between">
                                    <p>latitude</p>
                                    <p>{{ $item->latitude }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>longitude</p>
                                    <p>{{ $item->longitude }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>စိုက်ပျိုးမြေဧက</p>
                                    <p>{{ $item->farm_size_acre }}</p>
                                </div>
                                <div class=" d-flex justify-content-center my-2">
                                    <a href="" class=" mx-2 btn btn-outline"><i
                                            class="fa-solid fa-eye text-primary fs-md-5 fs-4"></i></a>
                                    <a href="" class="mx-2 btn btn-outline"><i
                                            class="fa-solid fa-pen-to-square fs-md-5 fs-4"></i></a>
                                    <button class="mx-2 btn btn-outline" onclick="DeleteData({{ $item->id }})"><i
                                            class="fa-solid fa-trash text-danger fs-md-5 fs-4"></i></button>
                                </div>
                                <a href="service-details.html" class="service-link">
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
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });

                location.href = '/farmer/farmer/delete/' + id;
            });
        }
    </script>
@endsection
