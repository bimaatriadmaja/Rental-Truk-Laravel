@extends('rental.main')

@section('title', 'Price')

@section('content')
<link rel="stylesheet" href="{{ asset('css/price.css') }}">
<div class="background-container" style="background-image: url('{{ asset('img/logo.jpg') }}'); background-size: cover; background-position: center; height: calc(100vh - 140px); display: flex; justify-content: center; align-items: center;">
<section id="price" style="overflow: hidden;">

        <div class="price-content">
        <div class="price-list" style="max-width: 100%; display: flex; justify-content: center;">
            <div class="price-details" style="display: flex; flex-direction: column; align-items: center;">
                <h2 style="color:black">Daftar Harga Sewa</h2>
                <div class="truk-list">
                    <div class="truk-cover" style="display: flex; justify-content: space-between;">
                        <div class="truk">
                            <h3>Canter HD 125 PS</h3>
                            <p>Harga sewa kami:</p>
                            <ul>
                                <li>1 Hari : Rp 1.000.000</li>
                                <li>2 Hari : Rp 1.500.000</li>
                                <li>3 Hari : Rp 2.000.000</li>
                                <li>4 Hari : Rp 2.500.000</li>
                                <li>5 Hari : Rp 3.000.000</li>
                                <li>6 Hari : Rp 3.500.000</li>
                                <li>7 Hari : Rp 4.000.000</li>
                            </ul>
                        </div>
                        <div class="truk" style="margin-left: 20px;">
                        <h3>Ragasa 120 PS</h3>
                            <p>Harga sewa kami:</p>
                            <ul>
                                <li>1 Hari : Rp 800.000</li>
                                <li>2 Hari : Rp 1.300.000</li>
                                <li>3 Hari : Rp 1.800.000</li>
                                <li>4 Hari : Rp 2.300.000</li>
                                <li>5 Hari : Rp 2.800.000</li>
                                <li>6 Hari : Rp 3.300.000</li>
                                <li>7 Hari : Rp 3.800.000</li>
                            </ul>
                        </div>
                        <div class="truk" style="margin-left: 20px;">
                        <h3>FE 120 PS</h3>
                            <p>Harga sewa kami:</p>
                            <ul>
                                <li>1 Hari : Rp 600.000</li>
                                <li>2 Hari : Rp 1.100.000</li>
                                <li>3 Hari : Rp 1.600.000</li>
                                <li>4 Hari : Rp 2.100.000</li>
                                <li>5 Hari : Rp 2.600.000</li>
                                <li>6 Hari : Rp 3.100.000</li>
                                <li>7 Hari : Rp 3.600.000</li>
                            </ul>
                        </div>
                        <div class="truk" style="margin-left: 20px;">
                        <h3>Engkel 100 PS</h3>
                            <p>Harga sewa kami:</p>
                            <ul>
                                <li>1 Hari : Rp 400.000</li>
                                <li>2 Hari : Rp 900.000</li>
                                <li>3 Hari : Rp 1.400.000</li>
                                <li>4 Hari : Rp 1.900.000</li>
                                <li>5 Hari : Rp 2.400.000</li>
                                <li>6 Hari : Rp 2.900.000</li>
                                <li>7 Hari : Rp 3.400.000</li>
                            </ul>
                        </div>
                        <div class="truk" style="margin-left: 20px;">
                        <h3>Colt L300</h3>
                            <p>Harga sewa kami:</p>
                            <ul>
                                <li>1 Hari : Rp 200.000</li>
                                <li>2 Hari : Rp 700.000</li>
                                <li>3 Hari : Rp 1.200.000</li>
                                <li>4 Hari : Rp 1.700.000</li>
                                <li>5 Hari : Rp 2.200.000</li>
                                <li>6 Hari : Rp 2.700.000</li>
                                <li>7 Hari : Rp 3.200.000</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection