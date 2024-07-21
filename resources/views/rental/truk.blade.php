@extends('rental.main')

@section('title', 'Truk')

@section('content')
<link rel="stylesheet" href="{{ asset('css/truk.css') }}">
<div class="background-container">
    <section id="truk">
        <h2>Transportasi yang tersedia</h2>
        <div class="truk-list">
            <div class="truk-cover">
                <figure>
                    <img class="truk-img" src="{{ asset('img/canter.jpg') }}" alt="truk 1" >
                    <figcaption>Canter HD 125 PS</figcaption>
                </figure>
                <figure>
                    <img class="truk-img" src="{{ asset('img/rgs.jpg') }}" alt="truk 2">
                    <figcaption>Ragasa 120 PS</figcaption>
                </figure>
                <figure>
                    <img class="truk-img" src="{{ asset('img/fe.jpg') }}" alt="truk 3">
                    <figcaption>FE 120 PS</figcaption>
                </figure>
                <figure>
                    <img class="truk-img" src="{{ asset('img/engkel.jpg') }}" alt="truk 4">
                    <figcaption>Engkel 100 PS</figcaption>
                </figure>
                <figure>
                    <img class="truk-img" src="{{ asset('img/colt.jpg') }}" alt="truk 5">
                    <figcaption>Colt L300</figcaption>
                </figure>
            </div>
        </div>
    </section>
</div>
@endsection
