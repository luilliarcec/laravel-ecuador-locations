<?php

namespace Luilliarcec\EcuadorLocations\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected string $table = 'provincias';

    public bool $timestamps = false;

    protected array $guarded = [];
}
