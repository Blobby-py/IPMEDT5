<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bak extends Model
{
    use HasFactory;

    protected $table = "dobbelstenen_bak";
    protected $fillable = ['dobbelsteen_bak'];
}