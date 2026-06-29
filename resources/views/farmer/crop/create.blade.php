@extends('farmer.layout.main')

@section('content')
    <div class="container">
        <div class="d-md-flex justify-content-between my-5">
            <div class="">
                <div class="">
                    <h3 class=" fw-bold ">သီးနှံများ ထပ်ထည့်နိုင်ပါသည်</h3>
                </div>
                <div class=" d-flex justify-content-start gap-2 mt-3">
                    <a href="{{ route('farmer#list') }}">စိုက်ပျိုးမြေစာရင်း</a>
                    <i class="fa-solid fa-arrow-right mt-1 text-primary"></i>
                    <a href="{{ route('farmer#addCrop') }}">သီးနှံအသစ်ထည့်ခြင်း</a>
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

                        <form action="{{ route('farmer#createCrop') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row ">
                                <div class="col my-3">
                                    <label for="" class=" mb-2">သီးနှံအမည်</label>
                                    <input type="text" name="cropName" value="{{ old('cropName') }}" placeholder="သီနှံအမည်ထည့်ပါ"
                                        class="form-control @error('cropName')
                                    is-invalid
                                @enderror">
                                    @error('cropName')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class=" btn btn-info rounded-5 px-5">ထည့်သွင်းမည်</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
