<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
    
        dd($flights[0]);
        /*foreach($flights as $flight) {
            echo $flight->name . "<br>";
        }*/

    }
}
