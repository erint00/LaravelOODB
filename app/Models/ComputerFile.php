<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerFile extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = [
        'computer',
        'type',
        'file'
    ];
}
