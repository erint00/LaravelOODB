<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'sifra',
        'vrijeme',
        'opis',
        'kupac',
        'racunar',
    ];
}
