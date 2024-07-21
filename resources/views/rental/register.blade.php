<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body class="register-background">
    <div class="container">
        <h1><center>Register</center></h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="name" value="{{ old('name') }}"> 
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password Confirmation</label>
                <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
                @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
