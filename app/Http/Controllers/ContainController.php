<?php

namespace App\Http\Controllers;
use App\History;
use Illuminate\Http\Request;
error_reporting(0);
class ContainController extends Controller
{
    public function contain ($id,$title) {
        //dd($title);
        return view('contain',['id'=>$id,'title'=>$title]);
    }

    public function addd (Request $request) {
        $j=$request->movie;
        $user = \Session::get("id");
       // dd($j);
        $History = new History();
        $History->movie_id = $j;
        $History->user_id = $user;
        $History->save();
        return view('contain');
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
