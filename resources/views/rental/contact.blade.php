@extends('rental.main')

@section('title', 'Contact')

@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<div class="background-container" style="background-image: url('{{ asset('img/logo.jpg') }}'); background-size: cover; background-position: center; height: calc(100vh - 140px); display: flex; justify-content: center; align-items: center;">
    <section id="about">
        <h2 style="color:black">Tentang Kami</h2>
        <p style="color:black">Selamat datang di "Dwi Putra Transportation", Perusahaan transportasi kami menyediakan layanana sewa truk terbaik untuk kebutuhan pindahan barang. Kami menyediakan jasa pindahan barang dengan armada truk baik untuk jarak dekat yaitu didalam kota Solo maupun keluar kota Solo yaitu untuk antar provinsi dan antar pulau. Berbagai layanan yang kami berikan ini akan sangat membantu dan memudahkan anda. Jasa angkut yang kami tawarkan antara lain berupa jasa pindah rumah, kost, gudang, toko, angkut material bangunan dan lain-lain. Untuk bermacam-macam layanan angkutan yang kami tawarkan, kami menggunakan truk dengan berbagai jenis kapasitas muatan. Kami pastikan bahwa anda akan mendapatkan armada truk yang tepat yang sesuai dengan kebutuhan anda. Dengan berbagai pilihan truk yang kami sediakan, kami akan menjadi pilihan terbaik bagi anda. Untuk bermacam-macam jenis truk yang kami sewakan, kami menawarkan berbagai pilihan jangka waktu sewa. Kami menyediakan sewa truk harian, mingguan, bulanan serta sewa truk tahunan untuk keperluan pribadi dan perusahaan serta instansi baik negeri maupun swasta.
        Kami menyediakan truk yang terbaik untuk segala macam kebutuhan muatan barang anda. Jasa sewa truk telah menjadi kebutuhan di waktu sekarang ini. Dengan semakin berkembangnya pembangunan, ketersediaan akan sewa truk telah menjadi kebutuhan bagi berbagai lapisan masyarakat. Untuk saat ini, berbagai perusahaan transportasi yang menyediakan jasa sewa truk akan banyak ditemukan diberbagai kota di Indonesia dan salah satunya adalah di kota Solo. Perusahaan kami hadir di kota Solo untuk membantu anda masyarakat kota Solo yang membutuhkan akan jasa sewa truk dengan pelayanan yang cepat, murah, dan tentu saja professional.</p>

        <h2 style="color:black">Hubungi Kami</h2>
        <p1 style="color:black">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui WhatsApp:</p1>
        <a href="https://wa.me/62895422615117" target="_blank" style="color:blue">Hubungi via WhatsApp</a>
    </section>
</div>
@endsection
