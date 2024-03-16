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
    ];
    protected $table = 'pilotes'; // Explicitly set the table name if it's not the plural of the class name
}
