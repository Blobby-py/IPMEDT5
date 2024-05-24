<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esp32Device extends Model
{
    use HasFactory;

    protected $table = "esp32_devices";
    protected $fillable = ['mac_address', 'dobbelstenen_over', 'dobbelstenen_bak', 'ip_address'];
}
