@extends('.layouts.main');
@section('title', 'Register');

@section('content') 
<div class="auth-page auth-page--login">
<form method="POST" action="{{ route('register') }}" class="auth-form">
        @csrf
        <h3 class="auth-title">Register</h3>
        <div class="auth-form-group">
            <label for="name" class="auth-form-label">Name</label>
            <input type="text" name="name" class="auth-form-input" value="{{old('name')}}">
            @error('name')
            <div class="error-sub-text">
                {{$message}}
            </div>
            @enderror
        </div>
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
            <label for="password_confirmation" class="auth-form-label">Confirm Password</label>
            <input type="password"name="password_confirmation" required autocomplete="current-password" class="auth-form-input">
            @error('password_confirmation')
            <div class="error-sub-text">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="auth-form-group">
            <a href="{{ route('login') }}">
                Already registered?
            </a>
        </div>
        <div class="auth-form-group">
            <button type="submit"class="auth-form-input">Register</button>
        </div>
    </form>
    
</div>
@endsection