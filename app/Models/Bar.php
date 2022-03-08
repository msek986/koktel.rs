<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;

    protected $table = 'bars';

    protected $primaryKey = 'id';

    public function barSocial()
    {
        return $this->hasMany(BarSocial::class);
    }
}
