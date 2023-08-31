<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function index()
    {
        $locations = Map::select(['*',DB::raw('ST_AsText(point) as point')])->get();
        return response()->json([
            'data' => $locations,
        ]);
    }
}
