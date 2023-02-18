<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condidat extends Model
{
    protected $primaryKey = 'id_con';
    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'poste',
        'dateN',
        'CV',
        'cni',
        'email',
    ];
}
