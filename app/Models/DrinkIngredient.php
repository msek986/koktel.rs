<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkIngredient extends Model
{
    use HasFactory;

    protected $table = 'drink_ingredient';

    protected $primaryKey = 'id';

    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
}
