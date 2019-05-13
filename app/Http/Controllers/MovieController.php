<?php

namespace App\Http\Controllers;
use App\History;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function apply () {
    	return view('apply');
    }

    public function history () {
    	return view('apply');
    }
}
