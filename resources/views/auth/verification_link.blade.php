@extends('layouts.membership.app')
@section('title', 'Email Verification Link')
@section('content')

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Need Email Verification Again?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to verify your account!</p>
                                            <p>
                                                @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            </p>
                                    </div>
                                    
                                    <form class="user" method="POST" action="{{ route('link.email') }}">
                                        @csrf
                                            @if(session('messege')) 
                                                <div class="alert alert-success">{{session('messege')}}</div>
                                            @endif
                                            @if(session('error')) 
                                                <div class="alert alert-danger">{{session('error')}}</div>
                                            @endif
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" 
                                                placeholder="Enter Email Address..."
                                                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email"  required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                       {{--  <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a> --}}
                                        <button class="btn btn-yellow btn-user btn-block" type="submit">Verify Email</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('register')}}">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection