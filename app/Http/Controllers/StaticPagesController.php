<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('blog/home');
    }

    public function help()
    {
        return view('blog/help');
    }

    public function about()
    {
        return view('blog/about');
    }
}
