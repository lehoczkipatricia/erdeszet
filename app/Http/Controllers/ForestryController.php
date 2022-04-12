<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forestry;
use App\Models\TreeSpecie;
use App\Models\ForestryTreeSpecie;
use App\Models\Region;

class ForestryController extends Controller
{
    public function listForestryRegion()
    {
        // rákeresett megyében található erdészetek
        return Region::find(1)->forestry;
    }

    public function listTreeSpecie()
    {
        // rákeresett erdészetben található fajták
        return Forestry::find(2)->treespecie;
    }

    public function listForestrySpecie()
    {
        // rákeresett fajta melyik erdészetben van
        return TreeSpecie::find(2)->forestry;
    }

}
