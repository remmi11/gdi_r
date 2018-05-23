<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MasterGeom extends Authenticatable
{
    protected $table='master_geom';
}
