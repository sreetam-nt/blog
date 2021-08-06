<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //    $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        //     'title' =>'required',
        //     'desc' =>'required']);

            // if($validatedData){

                // $name = $request->file('image')->getClientOriginalName();

                $name = $request->image->store('images','public');
        
                $tag = $request->tagsel;
                $tags = implode(" ",$tag);
        
                        Post::Create(
                    
                            ['title' => $request->title,
                            'desc' => $request->desc,
                            'image' =>$name,
                            'tag_id' =>$tags,
                            'users_id' =>Auth::user()->id,
                            'comment_id'=>0
                           ]);
                           return redirect('home');


            // }
            // else{
               
            //         // 
            // }

            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $sel = Post::all();
        return view('home', ['datas' => $sel]);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::find($id);
        return view('post',compact('data'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
