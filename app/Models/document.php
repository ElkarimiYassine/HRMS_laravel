<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    protected $primaryKey = 'id_doc';
    protected $fillable = [
        'nom_doc',
        'type',
        'file',
    ];
    public function demande()
    {
        return $this->hasMany(dem_doc::class,  'id_doc', 'id_doc');
    }
}
