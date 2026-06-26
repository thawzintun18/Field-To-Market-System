@extends('farmer.layout.main')

@section('content')
    <div class="container">
        <div class="d-md-flex justify-content-between my-5">
            <h3 class=" fw-bold ">သီးနှံများ ထပ်ထည့်နိုင်ပါသည်</h3>
            <div class=" d-flex justify-content-end mt-1">
                <a href="{{ route('farmer#list') }}" class=" btn btn-success rounded-5 px-5">နောက်သို့</a>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-8 offset-md-2">
                <div class="card ">
                    <div class="card-body">

                        <form action="{{ route('farmer#editionCrop') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $crop->id }}">

                            <div class="row">
                                <div class="col my-3">
                                    <label class="mb-2">သီးနှံအမည်</label>

                                    <input type="text" name="cropName" value="{{ old('cropName', $crop->name) }}"
                                        placeholder="သီးနှံအမည်ထည့်ပါ"
                                        class="form-control @error('cropName') is-invalid @enderror">

                                    @error('cropName')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-center my-3">

                                <button type="submit" class="btn btn-info rounded-5 px-5">
                                    ပြင်ဆင်မည်
                                </button>

                            </div>
                        </form>

                        <div class=" d-flex justify-content-center">

                            <form action="{{ route('farmer#deleteCrop', $crop->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger rounded-5 px-5"
                                    onclick="return confirm('ဒီသီးနှံကို ဖျက်မှာသေချာပါသလား?')">
                                    ဖျက်မည်
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
