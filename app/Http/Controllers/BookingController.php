<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Validation\Rule;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'phone_number' => 'required',
            'day' => 'required',
            'transport_type' => 'required',
        ]);

        Booking::create($validatedData);

        return redirect()->route('bookings.create')
            ->with('success', 'Booking created successfully.');
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }
    
public function update(Request $request, Booking $booking)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'alamat' => 'required',
        'phone_number' => 'required',
        'day' => ['required', Rule::in(['1', '2', '3', '4', '5', '6', '7'])],
        'transport_type' => ['required', Rule::in(['canter', 'ragasa', 'fe', 'engkel', 'colt'])],
    ]);

    $booking->update([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'alamat' => $validatedData['alamat'],
        'phone_number' => $validatedData['phone_number'],
        'day' => $validatedData['day'],
        'transport_type' => $validatedData['transport_type'],
    ]);

    return redirect()->route('bookings.index')->with('success', 'Booking updated successfully');
}
   
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
            ->with('success', 'Booking deleted successfully');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }
}