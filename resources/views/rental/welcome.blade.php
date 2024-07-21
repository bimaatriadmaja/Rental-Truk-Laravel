<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dwi Putra Transportation</title>
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body style="background-image: url('/img/truk.jpg'); background-size: cover; background-position: center; height: calc(100vh - 140px); align-items: center;">
  <header>
    <h1>Dwi Putra Transportation</h1>
    <nav>
      <ul>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
      </ul>
    </nav>
  </header>

  <div class="para1">
    <h1>Sewa Truk Terbaik di Kota Anda</h1>
    <p>Kami menyediakan berbagai macam truk berkualitas untuk kebutuhan Anda.</p>
  </div>

  @yield('content')

  <footer>
    <p>&copy; {{ date('Y') }} Dwi Putra Transportation</p>
  </footer>
</body>
</html>