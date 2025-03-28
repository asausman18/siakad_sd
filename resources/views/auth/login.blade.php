@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" id="remember" name="remember" class="form-check-input">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
            
            <div class="text-center mt-2">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        </form>
    </div>
</div>
@endsection
