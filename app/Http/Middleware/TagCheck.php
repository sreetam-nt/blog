<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Post;


class TagCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       
        $post = Post::get();
        $tagid =[];
        $id =$request->route('id');
        foreach($post as $pos){
             $tagid[] = $pos->tag_id;
             
        }
        $validate = in_array($id,$tagid);
        if($validate){
            return redirect()->back();
        }
        else{
            return $next($request);
        }

      
       
    }
}
