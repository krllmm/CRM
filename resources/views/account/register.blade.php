<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/account/register.css') }}">
</head>
<body>
	<div class="main">
        <div class="signup">
            <form action="{{ route('create_account') }}" method="POST">
                @csrf
                <label>Create account</label>
                <input type="text" name="name" placeholder="User name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Create account</button>
            </form>
        </div>
	</div>
</body>
</html>
