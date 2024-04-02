<?php

namespace App\Models;

use App\Evaluation;
use App\Competence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Etudiant extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_etudiant';
    protected $guarded=[];

    // public function evaluations()
    // {
    //     return $this->hasMany(Evaluation::class, 'ID_etudiant');
    // }

    // public function postulations()
    // {
    //     return $this->hasMany(Postuler::class, 'ID_etudiant');
    // }

//  public function competences()
//      {

//      return $this->belongsToMany(Competence::class, 'a', 'ID_etudiant', 'Id_competence');
//      }
    public function user()
    {
        return $this->belongsTo(User::class, 'ID_users');
    }

}
