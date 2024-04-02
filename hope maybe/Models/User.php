<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Pilote;
use App\Models\Etudiant;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'type' => 'integer',
        ];
    }

    // /**
    //  * idon't know if this gonna work
    //  *
    //  * @param string $value
    //  * @return \illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function type(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) => ["user" ,"admin", "pilote"][$value],
    //     );

    // }



    public function pilote()
    {
    return $this->hasOne(Pilote::class, 'ID_users');
    }

    public function etudiant()
    {
    return $this->hasOne(Etudiant::class, 'ID_users');
    }



}


