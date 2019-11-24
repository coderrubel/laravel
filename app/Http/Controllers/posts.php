<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class posts extends Controller
{
    public function catagori(){
         return view('post.post');
    }

    public function StorePost(Request $post){
        $data=array();
        $data['name']=$post->name;
        $data['disription']=$post->disription;
        
      //  $posts=DB::table('posts')->insert($data);
        //return response()->json($data); 
       // echo "<pre>";
       // print_r($data);
       $post=DB::table('posts')->insert($data);

    }
}
