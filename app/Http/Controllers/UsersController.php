<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {
        return view('index');
    }

    public function moview () {
        return view('movie');
    }

    public function movie (Request $request) {
    	$name = $request->name;
        $Users = new Users();
        $Users->name = $name;
        $Users->save();
        $id = $Users->id;
        //dd($id);
        //dd($Users->toArray());
        $data = Users::query();
        $data->where('user_id',$id);
            /*first()   get() この二つは似ているようで違う
　　　　　　　first()配列を一つ作るのに対して
　　　　　　　get()は複数の配列を作れるようにプログラムされているため
　　　　　　　配列の中に配列を作ってしまう
            */
          $data = $data->first();
 //       $data = $data->first()->toArray();
 //       $data = $data->get()->toArray();
        
//        $result = array_slice($data , 0,1);
//        dd($result);
        $name = $data->name;
        $user_id = $data->user_id;
      //  $namae = array($name,$user_id);
       // dd($array->toArray());
        /* session　個々単位でとるならばできた右側が保存名左側が自分が保存したい値 */
        session(['name'=>"$name"]);
        session(['id'=>"$user_id"]);
       // dd($request->toArray());
        //dd($name);
        return view('movie',['name'=>$name,'user_id'=>$user_id]);
    }
}
