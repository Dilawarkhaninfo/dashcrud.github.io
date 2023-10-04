@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow bg-light">
        <div class="card-body">
            <h2 class="text-primary fw-bold text-center mb-3">Forget Password Here.....!</h2>
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <div class="bg-primary text-white p-4 shadow rounded">
                        <h1>Dilawar Khan</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga suscipit cupiditate unde nemo ad praesentium magnam tenetur explicabo porro voluptates.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga suscipit cupiditate unde nemo ad praesentium magnam tenetur explicabo porro voluptates.</p>
                        <!-- <img src="{{ asset('images/hardware6.png') }}" class="img-fluid w-100 vh-100 rounded shadow" alt=""> -->
                    </div>
                </div>
                <div class="col-6">
                    <!-- <h2 class="text-warning fw-bold text-center mb-3">Login Here.....!</h2> -->
                    <div class="card shadow">
                        <div class="card-body">
                            <div>
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" placeholder="Enter Email here..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
