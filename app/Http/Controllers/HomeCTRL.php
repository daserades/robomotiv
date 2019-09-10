<?php

namespace App\Http\Controllers;

use App\Corporate;
use App\Slider;
use Illuminate\Http\Request;

class HomeCTRL extends Controller
{
    public function index()
    {
        $sliders = Slider::all();

        return view('index', compact('sliders'));
    }
}
