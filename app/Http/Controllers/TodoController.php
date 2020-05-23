<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TodoController extends Controller
{
    function index(){
    	$book = DB::table("book")->get();
    	return view("book",["book"=>$book]);
    }
    function store(Request $request){
    	// echo "store";
    	$title =$request->input("title");
    	$author =$request->input("author");
    	DB::table("book")->insert(
    		["title"=>$title,"author"=>$author]
    	);
    	return redirect("/book");
    }
    function destroy($ida){
    	DB::table("book")->where('id','=',$ida)->delete();
    	 return redirect("/book");
    }

    //  function edit($ida){
    //     // DB::table("book")->where('id','=',$ida)->edit();
    //     echo"nhi";
    //      //return redirect("/book");
    // }

   function edit($id){
    $book=DB::table('book')->select(DB::raw('id,title,author as id,title,author'))->where('id','=',$id)->get();
    $book=json_decode($book,true);
    return view('new_update',['id'=>$id,'book'=>$book]);
   }


   function update(Request $req)
    {    
         $id=$req->input('id');
         $title=$req->input('title');
         $author=$req->input('author');
         DB::table("book")->where('id',$id)->update(['title'=>$title,'author'=>$author]);
        return redirect("/book");
    }

    function interface(){
    	// echo "horrible";
    	return view("interface");
    }
}
