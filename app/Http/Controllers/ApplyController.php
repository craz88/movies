<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function apply (Request $request) {
        $user_id = \Session::get("id");
    	$Movie = new Movie();
        $Movie->title = $request->title;
        $Movie->user1_id = $user_id;
        $Movie->save();
        //dd($Movie->toArray());
        
        //dd($applys->toArray());
        return view('movie');
    }
}
