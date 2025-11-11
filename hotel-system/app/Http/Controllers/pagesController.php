<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pest\Support\View;

class pagesController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function checkout(){
        return view('checkout');
    } 

    public function rooms(){
        return view('rooms');
    }

    public function room(){
        return view('room');
    }
}
