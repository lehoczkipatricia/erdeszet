<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forestry;
use App\Models\TreeSpecie;
use App\Models\ForestryTreeSpecie;
use App\Models\Region;

class ForestryController extends Controller
{
    public function listForestry()
    {
        return Region::find(1)->forestry;
    }

    public function listTreeSpecie()
    {
        return Forestry::find(2)->treespecie;
    }

    public function listForestries()
    {
        return TreeSpecie::find(2)->forestry;
    }

}
