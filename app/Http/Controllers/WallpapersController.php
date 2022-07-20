<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallpapersController extends Controller
{
    public function wallpapers() {
        return view('site.wallpapers');
    }
}