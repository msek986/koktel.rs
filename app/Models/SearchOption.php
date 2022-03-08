<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchOption extends Model
{
    use HasFactory;

    protected $table = 'search_options';

    protected $primaryKey = 'id';
}
