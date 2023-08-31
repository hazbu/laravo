<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Map extends Model
{
    use Spatial;

    protected $spatial = ['point'];
}
