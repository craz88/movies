<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hisotryController extends Controller
{
    public function contain ($user_id) {
        dd($user_id);
        return view('contain',['id'=>$id,'title'=>$title]);
    }
}
