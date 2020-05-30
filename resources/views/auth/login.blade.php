@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="containter">
                        <div class="row">
                            <div class="col-12">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{asset('storage/images/logo.png')}}" alt=""> HEXIAN.inc
                             </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 m-3">
                            <h3 class="text-center custom-color">MOTHERTOUCH STUDENTS PORTAL &copy;2019
                                </h3>
                            </div>
                        </div>

                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="student_number" class="col-md-4 col-form-label text-md-right">{{ __('Student Number') }}</label>

                            <div class="col-offset-2 col-md-6 mb-2">
                                <input id="student_number" type="text" class="form-control @error('student_number') is-invalid @enderror"
                                name="student_number" value="{{ old('student_number') }}" autocomplete="student_number" autofocus>
                                @error('student_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-offset-2 col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
