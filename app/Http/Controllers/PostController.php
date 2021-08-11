<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Notifications;
use App\Models\Tag;
use App\Models\User;
use Notification;
use App\Notifications\PostNotification;




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
        
                $name = $request->image->store('images','public');
        
                $tag = $request->tags;
                $tags = implode(",",$tag);
        
                 $post =  Post::create(
                    
                            ['title' => $request->title,
                            'desc' => $request->desc,
                            'image' =>$name,
                            'tag_id' =>$tags,
                            'users_id' =>Auth::user()->id,
                            'comment_id'=>0
                           ]);

       $user = Auth::user();
       $names= Auth::user()->name;

    //    Notifications::Create(['postid'=>$post->id]);
  
        $postdata = [
         
            'greeting' => $names,
            'thanks' => 'Thank you for Posting',
            'body' =>$post->title
           
         ];
       
  
        Notification::send($user, new PostNotification($postdata));
        return redirect('home');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
        $tags = explode(",",$data->tag_id);
        
        $tag =[];
         foreach($tags as $ids){

            $tag[] = Tag::find($ids);
           
         }
        $comment = Comment::where('postid',$id)->get();
        return view('post',compact('data','comment','tag'));
        
    
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

    public function notification(Request $req)
    {
    
   
    }
}
