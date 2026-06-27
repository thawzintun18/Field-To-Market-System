@extends('farmer.layout.main')

@section('content')
    <div class="container">
        <div class="d-md-flex justify-content-between my-5">
            <div class="">
                <div class="">
                    <h3 class=" fw-bold ">စိုက်ပျိုးမြေ အချက်အလက်များ ပြင်နိုင်ပါသည်</h3>
                </div>
                <div class=" d-flex justify-content-start gap-2 mt-3">
                    <a href="{{ route('farmer#list') }}">စိုက်ပျိုးမြေစာရင်း</a>
                    <i class="fa-solid fa-arrow-right mt-1 text-primary"></i>
                    <a href="{{ route('farmer#directPage') }}">စိုက်ပျိုးမြေသစ်ထည့်ခြင်း</a>
                </div>
            </div>
            <div class=" d-flex justify-content-end mt-1">
                <div class=""><a href="{{ route('farmer#list') }}" class=" btn btn-success rounded-5 px-3">နောက်သို့</a></div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-8 offset-md-2">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex justify-content-center my-3">
                            <img src="" id="output" class=" rounded" style="display: none;" width="230px"
                                height="200px" alt="">
                        </div>
                        <form action="{{ route('farmer#create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <div class="col-md-6 my-3">
                                    <label for="" class=" mb-2">စိုက်ပျိုးမြေ၏ပုံ</label>
                                    <input type="file" name="image" value="{{ old('image') }}" accept="image/*" placeholder="စိုက်ပျိုးမြေပုံထည့်ရန်"
                                        class="form-control @error('image')
                                    is-invalid
                                @enderror"
                                        onchange="loadFile(event)">
                                    @error('image')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3">
                                    <label for="" class=" mb-2">စိုက်ပျိုးမြေဧက</label>
                                    <input type="text" name="acre" value="{{ old('acre') }}" placeholder="စိုက်ပျိုးမြေဧကထည့်ရန်"
                                        class="form-control @error('acre')
                                    is-invalid
                                @enderror">
                                    @error('acre')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 my-3">
                                    <label for="" class=" mb-2">လတ္တီကျု</label>
                                    <input type="text" name="lat" value="{{ old('lat') }}" placeholder="လတ္တီကျုထည့်ရန်"
                                        class="form-control @error('lat')
                                    is-invalid
                                @enderror">
                                    @error('lat')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3" class=" mb-2">
                                    <label for="">လောင်ဂျီကျု</label>
                                    <input type="text" name="long" value="{{ old('long') }}" placeholder="လောင်ဂျီကျုထည့်ရန်"
                                        class="form-control @error('long')
                                    is-invalid
                                @enderror">
                                    @error('long')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 my-3">
                                    <label for="" class=" mb-2">စိုက်ပျိုးမြေ၏နေရာ</label>
                                    <textarea name="address"
                                        class=" form-control w-100 @error('address')
                                    is-invalid
                                @enderror"
                                        rows="5" placeholder="စိုက်ပျိုးမြေ၏နေရာထည့်ရန်">{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3">
                                    <label for="" class=" mb-2">တိုင်းဒေသကြီး</label>
                                    <input type="text" name="region" value="{{ old('region') }}" placeholder="တိုင်းဒေသကြီးထည့်ရန်"
                                        class="form-control @error('region')
                                    is-invalid
                                @enderror">
                                    @error('region')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class=" btn btn-info rounded-5 px-3">စိုက်ပျိုးမြေ ထည့်သွင်းမည်</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
