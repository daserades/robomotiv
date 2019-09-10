<?php

namespace App\Http\Controllers;

use App\Corporate;
use App\Slider;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HomeCTRL extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        SEOMeta::setTitle('Anasayfa');
        SEOMeta::setDescription('Linmak Firması resmi web sitesi');

        return view('index', compact('sliders'));
    }

    public function corporate()
    {
        SEOMeta::setTitle('Kurumsal');
        $corporates = Corporate::orderBy('id', 'DESC')->get();
        return view('corporate', compact('corporates'));
    }
}
