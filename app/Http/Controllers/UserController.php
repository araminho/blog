<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function show($id, Request $request)
    {
        DB::table('users')->where('role', 'admin')->dd();

        echo 222;
        
    }

}
