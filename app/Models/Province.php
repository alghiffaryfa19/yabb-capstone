<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table='provinces';
    protected $guarded = [];

    public function values()
    {
        return $this->hasMany(\App\Models\Value::class, 'province_id','id');
    }
}
