<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="login-background">
    <div class="container">
        <h1><center>Login</center></h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="{{ old('password') }}">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Login As:</label>
                <select name="role" id="role" class="form-control">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const roleSelect = document.getElementById('role');
            const submitButton = document.querySelector('button[type="submit"]');

            roleSelect.addEventListener('change', function () {
                const selectedRole = roleSelect.value;

                if (selectedRole === 'admin') {
                    window.location.href ="/index";
                } else {
                    submitButton.setAttribute('formaction', "{{ route('login') }}");
                }
            });
        });
    </script>
</body>
</html>
