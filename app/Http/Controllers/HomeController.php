<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home',
            'subTitle' => null,
            'slider' => Slider::where('featured', true)->orderby('order')->get(),
        ];
        return view('pages.home',  $data);
    }
}
