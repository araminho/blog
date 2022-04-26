<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function __construct()
    {
       // $this->middleware('age');
       $this->middleware('age')->only(['index', 'show']);
       // $this->middleware('age')->except('show');
    }


    public function index()
    {
        $countries = DB::table('countries')
            ->whereIn('region_name', ['Europe', 'Asia'])
            ->get();
        dd($countries->toArray());


       return view('countries', ['countries' => $countries]);
    }

    public function show($id)
    {
        $country = DB::table('countries')->find($id);
        dd($country);
    }
}
