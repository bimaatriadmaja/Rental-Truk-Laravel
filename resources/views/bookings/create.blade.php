@extends('bookings.layout')

@section('title', 'Booking List')
@section('content')
<div class="form-background">
<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
    </div>

    <div>
        <label for="phone_number">Nomor Telepon:</label>
        <input type="text" id="phone_number" name="phone_number" required>
    </div>

    <div>
        <label>Jumlah Hari:</label><br>
        <input type="radio" id="day_1" name="day" value="1" required>
        <label for="day_1">1 Hari</label><br>
        <input type="radio" id="day_2" name="day" value="2">
        <label for="day_2">2 Hari</label><br>
        <input type="radio" id="day_3" name="day" value="3">
        <label for="day_3">3 Hari</label><br>
        <input type="radio" id="day_4" name="day" value="4">
        <label for="day_4">4 Hari</label><br>
        <input type="radio" id="day_5" name="day" value="5">
        <label for="day_5">5 Hari</label><br>
        <input type="radio" id="day_6" name="day" value="6">
        <label for="day_6">6 Hari</label><br>
        <input type="radio" id="day_7" name="day" value="7">
        <label for="day_7">7 Hari</label><br>
    </div>

    <div>
        <label>Tipe Kendaraan:</label><br>
        <input type="radio" id="canter" name="transport_type" value="canter" required>
        <label for="canter">Canter HD 125 PS</label><br>
        <input type="radio" id="ragasa" name="transport_type" value="ragasa">
        <label for="ragasa">Ragasa 120 PS</label><br>
        <input type="radio" id="fe" name="transport_type" value="fe">
        <label for="fe">FE 120 PS</label><br>
        <input type="radio" id="engkel" name="transport_type" value="engkel">
        <label for="engkel">Engkel 100 PS</label><br>
        <input type="radio" id="colt" name="transport_type" value="colt">
        <label for="colt">Colt L300</label><br>
    </div>

    <button type="submit">Book Now</button>
</form>
</div>
@endsection