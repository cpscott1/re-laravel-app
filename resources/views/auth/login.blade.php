
@extends('.layouts.main');
@section('title', 'Login');

@section('content') 
<div class="auth-page auth-page--login">
    <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf
        <h3 class="auth-title">Login</h3>
        <div class="auth-form-group">
            <label for="email" class="auth-form-label">Email</label>
            <input type="email" name="email" class="auth-form-input" value="{{old('email')}}">
            @error('email')
            <div class="error-sub-text">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="auth-form-group">
            <label for="password" class="auth-form-label">Password</label>
            <input type="password" name="password" required autocomplete="current-password" class="auth-form-input">
            @error('password')
            <div class="error-sub-text">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="auth-form-group">
            <label for="password" class="auth-form-label">Remember Me<input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember"></label>
        </div>
        <div class="auth-page-form-group">
        @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif
        </div>
        <div class="auth-form-group">
            <button type="submit"class="auth-form-input">Login</button>
        </div>
    </form>
    
</div>
@endsection