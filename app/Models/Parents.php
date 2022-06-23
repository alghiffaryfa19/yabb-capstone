<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;
    protected $table='parents';
    protected $guarded = [];

    public function child()
    {
        return $this->hasMany(\App\Models\Child::class, 'parent_id','id');
    }
}
