@extends('rental.main')

@section('title', 'Home')

@section('content')
    <div class="background-container" style="background-image: url('{{ asset('img/logo.jpg') }}'); background-size: cover; background-position: center; height: calc(100vh - 140px); display: flex; justify-content: center; align-items: center;">
        <section id="home">
            <h2 style="color: black;">Selamat datang di website penyewaan truk kami</h2>
            <p style="color: black; text-align: center; margin-top: 20px;">Kami menyediakan berbagai pilihan truk berkualitas untuk kebutuhan Anda.</p>
        </section>
    </div>
@endsection
