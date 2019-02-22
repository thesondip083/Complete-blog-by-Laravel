<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\category;
use App\Post;
use Crypt;
use App\Tag;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('welcome')
    	         ->with('setdata',Setting::all()->first())//for the title
    	         ->with('catdata',category::take(5)->get())
    	                     //taking the first 5 category instead of all
    	         ->with('first_post',Post::orderBY('created_at','desc')->first())
    	                //last post will show at first. first() doesnt mean the 1st post.It defines the first array element of collection result
    	         ->with('second_post',Post::orderBY('created_at','desc')->skip(1)->take(1)->get()->first())
    	         //skip the first one..take the next one.get the result..take the 1st array element from collection
    	         ->with('third_post',Post::orderBY('created_at','desc')->skip(2)->take(1)->get()->first())
    	         //skip(2) 1st and second one skipped
    	         ->with('cat1',category::find(3))
    	         ->with('cat2',category::find(4))
    	         ->with('cat3',category::find(5));
    	         //nijer iccha moto category nilam


    }


    public function description($slug,$id)
    {
      $id=Crypt::decrypt($id);
     // dd($id);
      $data=Post::find($id);
      $next=Post::where('id','>',$id)->min('id');
      $prev=Post::where('id','<',$id)->max('id');
     // dd($data->all());
      return view('description')
                 ->with('data',$data)
                 ->with('setdata',Setting::all()->first())//for the title
    	         ->with('catdata',category::take(5)->get())
    	         ->with('first_post',Post::orderBY('created_at','desc')->first())
               ->with('tags',Tag::all())
               ->with('next_post',Post::find($next))
               ->with('prev_post',post::find($prev));
               
    }


    public function allpost($id)
    {
      $cat=category::find($id);
      return view('auth.cat_allpost')->with('cat',$cat)
                                 ->with('catdata',category::take(5)->get())
                                 ->with('tags',Tag::all())
                                 ->with('setdata',Setting::all()->first());
    }   


    public function tagposts($id)
    {
      $tag=tag::find($id);
      return view('auth.tag_allpost')->with('tag',$tag)
                                 ->with('catdata',category::take(5)->get())
                                 ->with('tags',Tag::all())
                                 ->with('setdata',Setting::all()->first());
    }   
}
