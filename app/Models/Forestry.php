<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forestry extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function region()
    {
        return $this->hasOne( Region::class );
    }

    public function treespecie()
    {
        return $this->belongsToMany( TreeSpecie::class );
    }
}
