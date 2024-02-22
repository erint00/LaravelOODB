<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable = [
        'naziv',
        'procesor',
        'graficka',
        'kuciste',
        'ram',
        'napojna',
        'brand',
    ];


}
