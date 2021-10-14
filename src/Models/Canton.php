<?php

namespace Luilliarcec\EcuadorLocations\Models;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = 'cantones';

    public $timestamps = false;

    protected $guarded = [];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id');
    }
}
