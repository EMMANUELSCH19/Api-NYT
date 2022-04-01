<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodios extends Model
{
    use HasFactory;

    protected $table = 'episodios';

    protected $fillable = [
        'nombre',
        'url',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
