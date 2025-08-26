<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function who() {
        return view('who');
    }
    public function programs() {
        return view('programs');
    }
    public function personality() {
        return view('personality');
    }
    public function personalityResult(Request $request) {
        // basic server-side sample: calculate result based on inputs
        $answers = $request->input('answers', []);
        $score = array_sum($answers);
        // map to program (simple)
        if ($score >= 8) $result = 'leadership';
        elseif ($score >= 5) $result = 'coaching';
        else $result = 'early_support';

        return view('results', compact('score','result'));
    }
    public function success() { return view('success-stories'); }
    public function gallery() { return view('gallery'); }
    public function contact() { return view('contact'); }
}
