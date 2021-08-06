<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'cname','users_id','id'
    ];

    public function userc()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }

}
