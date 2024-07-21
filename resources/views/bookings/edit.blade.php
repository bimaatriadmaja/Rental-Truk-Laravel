@extends('bookings.layout')

@section('title', 'Edit')
@section('content')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
<form action="{{ route('bookings.update', $booking->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="{{ $booking->name }}" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $booking->email }}" required>
    </div>

    <div>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="{{ $booking->alamat }}" required>
    </div>

    <div>
        <label for="phone_number">Nomor Telepon:</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ $booking->phone_number }}" required>
    </div>

    <div>
        <label>Jumlah Hari:</label><br>
        <input type="radio" id="day_1" name="day" value="1" {{ $booking->day == 1 ? 'checked' : '' }}>
        <label for="day_1">1 Hari</label><br>
        <input type="radio" id="day_2" name="day" value="2" {{ $booking->day == 2 ? 'checked' : '' }}>
        <label for="day_2">2 Hari</label><br>
        <input type="radio" id="day_3" name="day" value="3" {{ $booking->day == 3 ? 'checked' : '' }}>
        <label for="day_3">3 Hari</label><br>
        <input type="radio" id="day_4" name="day" value="4" {{ $booking->day == 4 ? 'checked' : '' }}>
        <label for="day_4">4 Hari</label><br>
        <input type="radio" id="day_5" name="day" value="5" {{ $booking->day == 5 ? 'checked' : '' }}>
        <label for="day_5">5 Hari</label><br>
        <input type="radio" id="day_6" name="day" value="6" {{ $booking->day == 6 ? 'checked' : '' }}>
        <label for="day_6">6 Hari</label><br>
        <input type="radio" id="day_7" name="day" value="7" {{ $booking->day == 7 ? 'checked' : '' }}>
        <label for="day_7">7 Hari</label><br>
    </div>

    <div>
        <label>Tipe Kendaraan:</label><br>
        <input type="radio" id="canter" name="transport_type" value="canter" {{ $booking->transport_type == 'canter' ? 'checked' : '' }}>
        <label for="canter">Canter HD 125 PS</label><br>
        <input type="radio" id="ragasa" name="transport_type" value="ragasa" {{ $booking->transport_type == 'ragasa' ? 'checked' : '' }}>
        <label for="ragasa">Ragasa 120 PS</label><br>
        <input type="radio" id="fe" name="transport_type" value="fe" {{ $booking->transport_type == 'fe' ? 'checked' : '' }}>
        <label for="fe">FE 120 PS</label><br>
        <input type="radio" id="engkel" name="transport_type" value="engkel" {{ $booking->transport_type == 'engkel' ? 'checked' : '' }}>
        <label for="engkel">Engkel 100 PS</label><br>
        <input type="radio" id="colt" name="transport_type" value="colt" {{ $booking->transport_type == 'colt' ? 'checked' : '' }}>
        <label for="colt">Colt L300</label><br>
    </div>

    <button type="submit">Update Booking</button>

</form>
@endsection
