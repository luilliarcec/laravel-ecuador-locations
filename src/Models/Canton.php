<?php

namespace Luilliarcec\EcuadorLocations\Models;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected string $table = 'cantones';

    public bool $timestamps = false;

    protected array $guarded = [];
}
