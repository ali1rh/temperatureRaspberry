<?php

namespace App\Http\Controllers;
use App\Models\Zahra;

class DamaController extends Controller
{
    public function dama (){
        return Zahra::latest('id')->first();        
    }
}
