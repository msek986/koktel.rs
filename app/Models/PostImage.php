<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;

    protected $table = 'post_image';

    protected $primaryKey = 'id';

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
