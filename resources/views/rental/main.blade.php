<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sewa Truk</title>
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
</head>
<body>
  <header>
    <h1>Dwi Putra Transportation</h1>
    <nav>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/truk">Transportation</a></li>
        <li><a href="/price">Price</a></li>
        <li><a href="/create">Booking</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/welcome">Log Out</a></li>
      </ul>
    </nav>
  </header>

  @yield('content')

  <footer>
    <p>&copy; {{ date('Y') }} Dwi Putra Transportation</p>
  </footer>
</body>
</html>
