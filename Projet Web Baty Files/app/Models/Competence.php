<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    public function internships()
    {
        return $this->belongsToMany(Internships::class, 'internship_competence', 'competence_id', 'internship_id');
    }
}
