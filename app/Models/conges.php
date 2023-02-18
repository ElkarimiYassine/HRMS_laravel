<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conges extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_cong';
    protected $fillable = [
        'id_user',
        'statut',
        'dateD',
        'dateF',
       
    ];
}
