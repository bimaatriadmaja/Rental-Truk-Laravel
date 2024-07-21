@extends('bookings.layout')

@section('title', 'Booking List')
<!DOCTYPE html>
<html>
<head>
    <title>Booking List</title>
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
    @section('content')
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('bookings.create') }}">Create New Booking</a>

    @if ($bookings->isEmpty())
        <p>No bookings available.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Jumlah Hari</th>
                    <th>Tipe Kendaraan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->alamat }}</td>
                        <td>{{ $booking->phone_number }}</td>
                        <td>{{ $booking->day }}</td>
                        <td>{{ $booking->transport_type }}</td>
                        <td>
                            <a href="{{ route('bookings.edit', $booking->id) }}" class="edit-button">Edit</a>
                            <a href="{{ route('bookings.destroy', $booking->id) }}" class="delete-button" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $booking->id }}').submit();">Delete</a>
                            <form id="delete-form-{{ $booking->id }}" action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @endsection
</body>
</html>
