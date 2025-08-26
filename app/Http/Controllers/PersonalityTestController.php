<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalityTestController extends Controller
{
    public function submit(Request $request)
    {
        // Example: collect answers
        $answers = $request->only(['q1', 'q2', 'q3', 'q4', 'q5']);

        // Here you can calculate the recommended programs based on answers
        $recommended = ['Program A', 'Program B'];

        // Pass data to the results page
        return redirect()->route('personality.results')
            ->with('recommended', $recommended);
    }

    public function results()
    {
        $recommended = session('recommended', []);

        return view('results', compact('recommended'));
    }
}
