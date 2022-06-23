<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;
    protected $table='values';
    protected $guarded = [];

    public function children()
    {
        return $this->belongsTo(\App\Models\Child::class, 'children_id','id');
    }

    public function year()
    {
        return $this->belongsTo(\App\Models\Year::class, 'year_id','id');
    }
}
