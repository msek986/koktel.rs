<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarSocial extends Model
{
    use HasFactory;

    protected $table = 'bar_social';

    protected $primaryKey = 'id';

    public function bar()
    {
        return $this->belongsTo(Bar::class);
    }
}
