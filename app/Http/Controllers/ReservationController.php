<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Add validation rules if needed
        $validatedData = $request->validate([
            // Add your validation rules here
        ]);

        // Create a new reservation instance
        $reservation = new Reservation();
        $reservation->category_id = $request->input('category_id');
        // Add other reservation data as needed

        // Save the reservation to the database
        $reservation->save();

        // Optionally, you can redirect back to the category page or to a success page
        return redirect()->route('categories.index')->with('success', 'Reservation created successfully');
    }
}


