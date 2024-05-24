<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Over extends Model
{
    use HasFactory;

    protected $table = "dobbelstenen_over";
    protected $fillable = ['dobbelsteen_over'];
}
