<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $fillable = [
        'title',
        'desc',
        'image','tag_id','comment_id','users_id','id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }


    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function comment()
    {
        return $this->belongsTo(Comment::class,'postid','id');
    }


}
