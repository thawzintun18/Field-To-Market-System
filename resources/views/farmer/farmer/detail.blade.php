@extends('farmer.layout.main')

@section('content')

    <div class="container">
        <div class="d-md-flex justify-content-between my-5">
            <div class="">
                <div class="">
                    <h3 class=" fw-bold ">စိုက်ပျိုးမြေ အသေးစိတ်အချက်အလက်များ</h3>
                </div>
                <div class=" d-flex justify-content-start gap-2 mt-3">
                    <a href="{{ route('farmer#list') }}">စိုက်ပျိုးမြေစာရင်း</a>
                    <i class="fa-solid fa-arrow-right mt-1 text-primary"></i>
                    <a href="{{ route('farmer#detail', $farmer->id) }}">စိုက်ပျိုးမြေ အသေးစိတ်ကြည့်ရှုရန်</a>
                </div>
            </div>
            <div class=" d-flex justify-content-end mt-1">
                <div class=""><a href="{{ route('farmer#list') }}" class=" btn btn-success rounded-5 px-3">နောက်သို့</a></div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('FarmerImages/' . $farmer->image) }}" class=" img-thumbnail w-100 my-3" height="200px" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="row mt-3">
                                    <div class="col-md-4 mt-md-0 mt-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class=" text-center">လတ္တီကျု</h5>
                                                <p class=" text-center fs-5 fw-bold"> {{ $farmer->latitude }} ° N</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-md-0 mt-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class=" text-center">လောင်ဂျီကျု</h5>
                                                <p class=" text-center fs-5 fw-bold"> {{ $farmer->longitude }} ° E</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-md-0 mt-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class=" text-center">စိုက်ပျိုးမြေဧက</h5>
                                                <p class=" text-center fs-5 fw-bold mt-1" > {{ $farmer->farm_size_acre }} ဧက</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="row my-3">
                                            <div class="col-md-4">
                                                <h5 class=" text-md-start text-center">တိုင်းဒေသကြီး</h5>
                                            </div>
                                            <div class="col-md-8">
                                                <p class=" text-md-start text-center mt-md-0 fs-5 mt-3 fw-bold"> {{ $farmer->region }} </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row my-3">
                                            <div class="col-md-4">
                                                <h5 class=" text-md-start text-center">စိုက်ပျိုးမြေ၏နေရာ</h5>
                                            </div>
                                            <div class="col-md-8">
                                                <p class=" text-md-start text-center mt-md-0 fs-5 mt-3 fw-bold"> {{ $farmer->address }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
