<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory;
    
   protected $table = 'tag';
    protected $fillable = [
        'tname','id'
    ];
  
    public function post()
    {
        return $this->hasMany(Post::class);
    }
    
}
