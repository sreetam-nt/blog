<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Notification;


use App\Notifications\CommentNotification;
use App\Models\Notifications;

class CommentController extends Controller
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
    public function store(Request $request, $id)
    {
        $cmt = Comment::create([
            'cname' => $request->comment,
            'users_id' => Auth::user()->id, 'postid' => $id
        ]);

        $user = Auth::user();
        $names = Auth::user()->name;
        $cname = $cmt->cname;
        $commentdata = [

            'greeting' => $names,
            'body' => $cname,
            'thanks' => 'Thank you for Commenting',

        ];
        //   $data = $notification->toArray($notifiable);
        //   Notifications::create(['postid'=>$id, 'id' => 1,
        //   'notifiable_type'=> Auth::user()->id,
        //   'type' => null ,'read_at' => null,
        //   'data' => null,

        // //   get_class($notification)
        // ]);


        Notification::send($user, new CommentNotification($commentdata));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function markasread()
    {
        foreach (auth()->user()->unreadNotifications as $notification) {
            $notification->markAsRead();
        }

        return redirect()->back();
    }

    public function notifredirect()
    {
        // $notf = Notifications::get();
        // foreach($notf as $nt){
        //     $id = $nt->id;
        // }


        // return dd($id);

    }
}

// /postdetails/{{$notification->notifiable_id}}