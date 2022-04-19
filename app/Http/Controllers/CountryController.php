<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $countries = DB::table('countries')
            ->whereIn('region_name', ['Europe', 'Asia'])
            ->get();
        dd($countries->toArray());


       // return view('countries', ['countries' => $countries]);
    }
}
