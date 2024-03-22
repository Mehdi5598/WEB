<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilote extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'centre',
        'promo',
    ];
    protected $table = 'pilotes';
}
