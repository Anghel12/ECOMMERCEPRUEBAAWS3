<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

   /*      if (request()->page) {
            $key = 'posts' . request()->page;

        } else {
            $key = 'posts';
        }
        
        if (cache::has($key)) {
            $posts = cache::get($key);
        } else {

            $posts = Post::where('status', 2)->latest('id')->take(20)->get();
            cache::put($key, $posts);
        } */

        return view('home.e_commerce.main.index');
    }

    public function show(/* POST $post */){

        /*      if (request()->page) {
                 $key = 'posts' . request()->page;
     
             } else {
                 $key = 'posts';
             }
             
             if (cache::has($key)) {
                 $posts = cache::get($key);
             } else {
     
                 $posts = Post::where('status', 2)->latest('id')->take(20)->get();
                 cache::put($key, $posts);
             } */
     
             return view('home.e-commerce.main.index');
             
         }
}
