<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoundtrackController extends Controller
{
    public function soundtrack() {
        return view('site.soundtrack');
    }
}