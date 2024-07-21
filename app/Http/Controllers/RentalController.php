<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function showHome()
    {
        return view('rental.home');
    }

    public function showTruk()
    {
        return view('rental.truk');
    }
 
    public function showPrice()
    {
        return view('rental.price');
    }

    public function showContact()
    {
        return view('rental.contact');
    }

    public function showLogout()
    {
        return view('rental.welcome');
    }
    
    public function showAdminPage()
    {
        return view('bookings.index');
    }
}