<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $table='years';
    protected $guarded = [];

    public function value()
    {
        return $this->hasMany(\App\Models\Value::class, 'year_id','id');
    }
}
