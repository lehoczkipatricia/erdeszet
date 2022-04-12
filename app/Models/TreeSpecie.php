<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreeSpecie extends Model
{
    use HasFactory;


    public function forestry()
    {
        return $this->belongsToMany( Forestry::class );
    }

}
