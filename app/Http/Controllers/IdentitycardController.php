<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identitycard;

class IdentitycardController extends Controller
{
    public function index()
    {
        $indentities = Identitycard::with(['user'])->get();
        foreach($indentities as $val){
            echo '<b>Identity ID</b> : '. $val->identity_number.'<br />';
            echo '<b>Identity ID Name</b> : '. $val->user->name .'<br />';
            echo '--------------------------------------------- <br/>';
          }
        //dd($indentity->toArray());
    }
}
