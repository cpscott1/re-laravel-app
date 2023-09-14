@extends('.layouts.main');
@section('title', 'Register');

@section('content') 
<div class="auth-page auth-page--login">
    <form action="" method="POST" class="auth-form">
        <h3 class="auth-title">Register</h3>
        <div class="auth-form-group">
            <label for="email" class="auth-form-label">Email</label>
            <input type="email" name="email" class="auth-form-input">
        </div>
        <div class="auth-form-group">
            <label for="password" class="auth-form-label">Password</label>
            <input type="password" name="password" class="auth-form-input">
        </div>
        <div class="auth-form-group">
            <button type="submit"class="auth-form-input">Login</button>
        </div>
    </form>
    
</div>
@endsection