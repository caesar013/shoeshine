<!DOCTYPE html>
<html>

<head>
    <title>ShoeShine</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('guest.register') }}" method="POST">
                @csrf
                <h1>Create Account</h1>
                <input type="text" placeholder="Name" name="name" required value="{{ old('name') }}">
                <input type="text" placeholder="Username" name="username" required value="{{ old('name') }}">
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('guest.login') }}" method="POST">
                @csrf
                <h1 class="m-3">Sign in</h1>
                @if (session('success'))
                <p class="m-1">{{ session('success') }} </p>
                @endif
                <input type="text" placeholder="Username" name="username" class="form-control" autofocus required value="{{ old('username') }}">
                <input type="password" placeholder="Password" name="password" class="form-control" required>
                <a href="">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
            - Read how I created this and how you can join the challenge
            <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
        </p>
    </footer>

    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>