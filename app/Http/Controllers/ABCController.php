<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ABCController extends Controller
{
    public function index() {
        abort(404);
        //echo "<br>ABC Controller.";
    }

}
