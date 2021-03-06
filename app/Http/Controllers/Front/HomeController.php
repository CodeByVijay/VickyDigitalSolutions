<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function services(){
        return view('front.service');
    }

    public function contact_us(){
        return view('front.contact');
    }
}
