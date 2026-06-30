@extends('farmer.layout.main')

@section('content')
    <div class="container">
        <div class="d-md-flex justify-content-between my-5">
            <div class="">
                <div class="">
                    <h3 class=" fw-bold ">သီးနှံစိုက်ပျိုးမှု အချက်အလက်များ ပြင်နိုင်ပါသည်</h3>
                </div>
                <div class=" d-flex justify-content-start gap-2 mt-3">
                    <a href="{{ route('farmer-crop#list') }}">သီးနှံစိုက်ပျိုးမှုစာရင်း</a>
                    <i class="fa-solid fa-arrow-right mt-1 text-primary"></i>
                    <a href="{{ route('farmer-crop#edit', $farmer_crop[0]->id) }}">အချက်အလက်ပြင်ဆင်ရန်</a>
                </div>
            </div>
            <div class=" d-flex justify-content-end mt-1">
                <div class=""><a href="{{ route('farmer-crop#list') }}"
                        class=" btn btn-success rounded-5 px-3">နောက်သို့</a></div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-6 offset-md-3">
                <div class="card ">
                    <div class="card-body">
                        <form action="{{ route('farmer-crop#update' , $farmer_crop[0]->id) }}" method="POST">
                            @csrf

                            <div class="my-3">
                                <label for="" class=" mb-2">စိုက်ပျိုးထားသော သီးနှံ</label>
                                <select name="crop_id"
                                    class=" form-select @error('crop_id')
                                        is-invalid
                                    @enderror"
                                    id="">
                                    <option value="">စိုက်ပျိုးထားသောသီးနှံ ရွေးချယ်ပါ</option>
                                    @foreach ($crop as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('farmer_id', $farmer_crop[0]->crop) == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }} </option>
                                    @endforeach
                                </select>
                                @error('crop_id')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="my-3">
                                <label for="" class=" mb-2">စိုက်ပျိုးသည့်ရက်စွဲ</label>
                                <input type="date" name="planting_date"
                                    value="{{ old('planting_date', $farmer_crop[0]->planting_date) }}"
                                    placeholder="စိုက်ပျိုးသည့်ရက်စွဲထည့်ရန်"
                                    class="form-control @error('planting_date')
                                    is-invalid
                                @enderror">
                                @error('planting_date')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="my-3">
                                <label for="" class=" mb-2">ခန့်မှန်းရိတ်သိမ်းမည့်ရက်စွဲ</label>
                                <input type="date" name="harvest_date"
                                    value="{{ old('harvest_date', $farmer_crop[0]->estimated_harvest_date) }}"
                                    placeholder="ခန့်မှန်းရိတ်သိမ်းမည့်ရက်စွဲထည့်ရန်"
                                    class="form-control @error('harvest_date')
                                    is-invalid
                                @enderror">
                                @error('harvest_date')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class=" btn btn-info rounded-5 px-3">အချက်အလက် ပြောင်းလဲမည်</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
