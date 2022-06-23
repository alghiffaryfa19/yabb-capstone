<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $table='children';
    protected $guarded = [];

    public function parents()
    {
        return $this->belongsTo(\App\Models\Parents::class, 'parent_id','id');
    }

    public function value()
    {
        return $this->hasMany(\App\Models\Value::class, 'children_id','id');
    }
}
