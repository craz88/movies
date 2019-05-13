<?php

namespace App\Http\Controllers;
use App\Http\Requests\TestRequest;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index () {
    	return view('test');
    }

    public function inde (TestRequest $request) {
    	// $validate_rule = [
     //        'name'=>'required',
     //        'mail'=>'email',
     //        'age'=>'numeric|between:0,150',
    	// ];
    	// $this->validate($request,$validate_rule);
    	// dd($this);
    	return view('test',['msg'=>'正しく入力されました。']);
    }
}
