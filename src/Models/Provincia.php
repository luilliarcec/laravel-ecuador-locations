<?php

namespace Luilliarcec\EcuadorLocations\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';

    public $timestamps = false;

    protected $guarded = [];

    public function cantones()
    {
        return $this->hasMany(Canton::class, 'provincia_id');
    }
}
