<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilote extends Model
{
    protected $primaryKey = 'ID_pilote';
    // protected $fillable = ['Nom_pilote', 'Prenom_pilote', 'Centre', 'Promotion'];
    protected $guarded=[];

    // public function evaluations()
    // {
    //     return $this->hasMany(Evaluation::class, 'ID_pilote');
    // };

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_users');
    }
}
