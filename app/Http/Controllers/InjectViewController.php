<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InjectViewController extends Controller
{
    public function financialData(){
        return view('financialData');
    }
}
