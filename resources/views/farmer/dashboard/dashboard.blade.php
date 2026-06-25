@extends('farmer.layout.main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="content">
                            <h1>မြန်မာ့လယ်ယာထွက်ကုန် အဝယ်ဒိုင်နှင့် Supply Chain Traceability System</h1>
                            <p>Field to Market Farmer Dashboard မှ ကြိုဆိုပါသည်။ ဤစနစ်သည် လယ်သမားများအတွက်
                                စိုက်ပျိုးရေးအချက်အလက်များကို လွယ်ကူစွာ မှတ်တမ်းတင်နိုင်ရန်နှင့် လယ်ယာစီမံခန့်ခွဲမှုကို
                                ပိုမိုထိရောက်စေရန် ရည်ရွယ်ဖန်တီးထားပါသည်။ သင့်လယ်ယာအချက်အလက်များကို ဖြည့်သွင်းပြီး
                                တည်တံ့ခိုင်မြဲသော စိုက်ပျိုးရေးဆီသို့ အတူတကွ လျှောက်လှမ်းကြပါစို့။</p>
                            <div class="cta-group">
                                <a href="#about" class="btn-primary">သင်၏ စိုက်ပျိုးရေးခရီးစဉ်ကို <br> ယနေ့ပင် စတင်လိုက်ပါ။</a>
                                <a href="https://youtu.be/N9HQB7RCdB0?si=gDNJku0UAc9YZMSs" class="btn-secondary glightbox">
                                    <i class="bi bi-play-circle"></i>
                                    <span>Watch Our Story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="hero-image">
                            <img src=" {{ asset('Image/farm.jpg') }} " alt="Corporate Business" class="img-fluid">
                            <div class="floating-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="card-content">
                                    <div class="metric">
                                        <span class="number">150+</span>
                                        <span class="label">မှတ်ပုံတင်ထားသော လယ်သမားများ</span>
                                    </div>
                                    <div class="metric">
                                        <span class="number">98%</span>
                                        <span class="label">စီမံခန့်ခွဲနေသော လယ်ယာဧရိယာ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" my-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <div class="card shadow-sm">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="">
                                            <img src=" {{ asset('Image/Broker.jpg') }} " class=" rounded-3" width="130px"
                                                height="100px" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class=" fw-bold m-2">အ၀ယ်ဒိုင် လုပ်ရန်</h5>
                                            <a href="" class=" btn btn-outline-primary m-2 ">Register form
                                                ဖြည့်ပါ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <div class="card shadow-sm">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="">
                                            <img src=" {{ asset('Image/Driver.jpg') }} " class=" rounded-3" width="130px"
                                                height="100px" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class=" fw-bold m-2">Driver လုပ်ရန်</h5>
                                            <a href="" class=" btn btn-outline-primary m-2 ">Register form
                                                ဖြည့်ပါ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <div class="card shadow-sm">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="">
                                            <img src=" {{ asset('Image/Buyer.jpg') }} " class=" rounded-3" width="130px"
                                                height="100px" alt="">
                                        </div>
                                        <div class="">
                                            <h5 class=" fw-bold m-2">ကုန်သည် လုပ်ရန်</h5>
                                            <a href="" class=" btn btn-outline-primary m-2 ">Register form
                                                ဖြည့်ပါ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="hero-features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <h4>Innovation Focus</h4>
                                <p>Transform challenges into opportunities through creative solutions</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h4>Expert Team</h4>
                                <p>Industry veterans dedicated to your success and growth</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="bi bi-award"></i>
                                </div>
                                <h4>Proven Results</h4>
                                <p>Track record of delivering measurable business outcomes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

        <div class="d-flex justify-content-center my-3">
            <a href="" class="add-btn"><i class="fa-solid fa-plus"></i>စိုက်ပျိုးမြေများထပ်ထည့်ရန်</a>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="">
                            <img src=" {{ asset('Image/Buyer.jpg') }} " class=" rounded-3" width="100%" height="200px"
                                alt="">
                        </div>
                        <h3 class=" mt-3">Creative Design Creative Design</h3>
                        <p>Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu.
                        </p>
                        <a href="service-details.html" class="service-link">
                            <span>သီးနှံများစိုက်ပျိုးရန်</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="">
                            <img src=" {{ asset('Image/Buyer.jpg') }} " class=" rounded-3" width="100%" height="200px"
                                alt="">
                        </div>
                        <h3>Creative Design</h3>
                        <p>Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu.
                        </p>
                        <a href="service-details.html" class="service-link">
                            <span>သီးနှံများစိုက်ပျိုးရန်</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="">
                            <img src=" {{ asset('Image/Buyer.jpg') }} " class=" rounded-3" width="100%" height="200px"
                                alt="">
                        </div>
                        <h3>Creative Design</h3>
                        <p>Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu.
                        </p>
                        <a href="service-details.html" class="service-link">
                            <span>သီးနှံများစိုက်ပျိုးရန်</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="">
                            <img src=" {{ asset('Image/Buyer.jpg') }} " class=" rounded-3" width="100%" height="200px"
                                alt="">
                        </div>
                        <h3>Web Development</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                        </p>
                        <a href="service-details.html" class="service-link">
                            <span>သီးနှံများစိုက်ပျိုးရန်</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Featured Services Section -->
@endsection
