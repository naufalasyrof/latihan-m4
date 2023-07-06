@extends('layouts.log')

@section('content')
<div class="container-sm my-5 pt-5">
    {{-- position-absolute top-50 start-50 translate-middle --}}
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-4 border">
            <div class="mb-3 text-center">
                <i class="bi-hexagon-fill me-2 fs-1 text-primary"></i>
                <h4 class="mb-5">Employee Data Master</h4>
            </div>
            <hr>
            <div class="row justify-content-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <input id="email" type="email" class="form-control py-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input id="password" type="password" class="form-control py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-3 py-2 col-12"><i class="bi bi-box-arrow-in-right me-1"></i>
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
