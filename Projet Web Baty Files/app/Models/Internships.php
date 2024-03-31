<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internships extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'localite',
        'duree',
        'promo',
        'salaire',
        'entreprise',
        'date',
        'number_place',
        'number_apply',
    ];

    protected $table = 'Internships';

    public function competences()
    {
        return $this->belongsToMany(Competence::class, 'internship_competence', 'internship_id', 'competence_id');
    }
}
