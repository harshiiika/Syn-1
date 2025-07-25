<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
 
<body>
    <div class="signin">
 
        <div class="container">
           
                <img src="https://synthesisbikaner.org/synthesistest/assets/background%20logo.png" alt="logo"
                    class="logo">
           
 
               @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('login.submit') }}" class="card">
    @csrf
    <h3>Login</h3><br>
    <div class="login-form">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" class="username" placeholder="Enter Your Email" required><br>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" class="username" placeholder="Enter Your Password" required><br>
    </div>
    <button class="btn" type="submit">Continue</button>
</form>

 
    </div>
    </div>
    <!-- <script src="{{ asset('js/login.js') }}"></script> -->
</body>
 
</html>
 