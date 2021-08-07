<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'cname','users_id','id','postid'
    ];

    public function userc()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
    public function postc()
    {
        return $this->belongsTo(Post::class,'postid','id');
    }

}
