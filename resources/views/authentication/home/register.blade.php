@extends('authentication.layout.main')


@section('content')
    <div class="register_box">

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="d-flex justify-content-center">
                <div class="">
                    <img src="{{ asset('Image/logo.jpg') }}" class=" img-profile" width="200px" height="110px" alt="">
                </div>
            </div>
            <h2 class="header">Field To Market System</h2>
            <h5 class="title">Registaration</h5>

            <div class="main">
                <div class="">
                    <div class="section">
                        <div class="left">
                            <div class="input_box">
                                <input type="text" name="name"
                                    class="@error('name')
                    is-invalid
                @enderror"
                                    value="{{ old('name') }}" placeholder="Enter name..." required>
                                @error('name')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="right">
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
                        </div>
                    </div>

                    <div class="section">
                        <div class="left">
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
                        <div class="right">
                            <div class="input_box">
                                <input type="password" name="password_confirmation"
                                    class="@error('password_confirmation')
                    is-invalid
                @enderror"
                                    value="{{ old('password_confirmation') }}" placeholder="Enter confirm password..."
                                    required>
                                @error('password_confirmation')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="button" type="submit">Register</button>
            <div class="register_link">
                <p>You have already account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
@endsection
