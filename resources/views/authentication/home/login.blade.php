@extends('authentication.layout.main')


@section('content')
    <div class="login_box">

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="d-flex justify-content-center">
                <div class="">
                    <img src="{{ asset('Image/logo.jpg') }}" class=" img-profile" width="200px" height="110px" alt="">
                </div>
            </div>
            <h5 class="header">Field To Market System</h5>
            <h2 class="title">Login</h2>

            <div class="main">
                <div class="">
                    <div class="input_box">
                        <input type="email" name="email"
                            class="@error('email')
                    is-invalid
                @enderror"
                            value="{{ old('email') }}" placeholder="Enter email..." required>
                        @error('email')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="input_box">
                        <input type="password" name="password"
                            class="@error('password')
                    is-invalid
                @enderror"
                            value="{{ old('password') }}" placeholder="Enter password..." required>
                        @error('password')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
            </div>

            <button class="button" type="submit">Login</button>
            <div class="register_link">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>
@endsection
