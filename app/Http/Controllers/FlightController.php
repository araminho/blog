<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::where('active', 1)
            ->orderBy('name', 'desc')
            ->take(2)
            ->get();


        foreach ($flights as $flight) {
            echo $flight->name . "<br>";
        }

        
        $flight = Flight::first();
        dd($flight);
    }
}
