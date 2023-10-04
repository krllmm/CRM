<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/account/login.css') }}">
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
</head>
<body>
	<div class="main">
        <div class="signup">
            <form action="{{ route('sign_in') }}">
                @csrf
                <label>Login</label>
                <input type="text" name="name" placeholder="Username" required autocomplete="off">
                <input type="password" name="password" placeholder="Password" required autocomplete="off">
                <button type="submit">Login</button>
            </form>
            <div class="new_container">
                <a href="{{ route('register') }}" class="new_account">New admin account</a>
            </div>
        </div>
	</div>
</body>
</html>
