<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    function index(){
        $user = auth()->user();
        return view('resume', compact('user'));
    }

    function download(){
        $user = auth()->user();
        $pdf = \PDF::loadView('resume', compact('user'));
        return $pdf->download('resume.pdf');
    }
}
