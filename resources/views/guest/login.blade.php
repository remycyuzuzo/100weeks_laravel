@extends('guest.layouts.template')

@section('page-title', 'Login - 100Weeks')

@section('content')
<div class="row h-100 justify-content-center">
    <div class="col-lg-5 col-md-6">
        <div class="card wrapper mt-4">
            <p class="text-center"><i class="fas fa-user"></i> {{__('enter your credentials')}} </p>
            <form action="" method="post" id="formLogin">
                <div id="validation">  
                    @if(session('error'))
                        <div class="message alert alert-danger text-center">
                            <span class="">{{session('error')}}</span>
                        </div>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <input type="text" placeholder="{{__('input your email address')}}" value="{{ old('email') }}" name="email" id="email" class="form-control @error('email') border-danger @enderror">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <input type="password" placeholder="{{__('input your password')}}" name="password" id="password" class="form-control @error('password') border-danger @enderror">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember">
                        {{ __('Remember me') }}
                    </label>                    
                </div>

                @csrf

                <div class="form-group button-box">
                    <button type="submit" class="btn btn-primary" name="login" data-submit>{{__('Login')}}</button>
                </div>
                <div class="text-center mt-2">
                    <a href="">{{__('Forgot your password')}}?</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
