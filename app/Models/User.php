<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'ville',
        'tel',
        'nationalite',
        'id_poste',
        'dateN',
        'datecert_deb',
        'profile',
        'matricule',
        'id_role',
        'adresse',

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function documents()
    {
        return $this->belongsToMany(document::class);
    }
    public function poste()
    {
        return $this->hasOne(poste::class,'id_poste', 'id_poste');
    }
    public function demande()
    {
        return $this->hasMany(dem_doc::class,  'id_doc','id');
    }
}
