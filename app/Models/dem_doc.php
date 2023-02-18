<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dem_doc extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_user',
        'id_doc',
        'statut',
    ];
    public function dem()
    {
        return $this->hasOne(user::class, 'id', 'id_user');
    }
    public function documents()
    {
        return $this->hasOne(document::class, 'id_doc', 'id_doc');
    }
}
