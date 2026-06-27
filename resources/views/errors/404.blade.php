@extends('farmer.layout.main')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 70vh;">

    <div class="text-center p-5 shadow-lg rounded-4 bg-white" style="max-width: 500px; width: 100%;">

        <!-- Icon -->
        <div class="mb-3">
            <i class="fas fa-exclamation-triangle text-danger" style="font-size: 70px;"></i>
        </div>

        <!-- Error Code -->
        <h1 class="display-3 fw-bold text-danger">404</h1>

        <!-- Message -->
        <h5 class="fw-bold mb-2">အချက်အလက်မရှိပါ</h5>
        <p class="text-muted mb-4">
            သင်ရှာနေသော data မရှိသေးပါ သို့မဟုတ် ဖျက်ပြီးဖြစ်နိုင်ပါသည်။
        </p>

        <button onclick="window.history.back()" class="btn btn-primary rounded-5 px-3">ပြန်သွားမည်</button>

    </div>

</div>
@endsection
