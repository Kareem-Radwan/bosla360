<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function story()
    {
        return view('about.story');
    }

    public function brief()
    {
        return view('about.brief');
    }

    public function partners()
    {
        return view('about.partners');
    }
}
