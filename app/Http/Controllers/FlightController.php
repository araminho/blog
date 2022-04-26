<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FlightController extends Controller
{
    public function index(Request $request, $id)
    {
        Log::emergency('test');
        $flight = Flight::find($id);
        dd($request->all());
        /*$flights = Flight::all();
    
        dd($flights[0]);
        foreach($flights as $flight) {
            echo $flight->name . "<br>";
        }*/

    }
}
