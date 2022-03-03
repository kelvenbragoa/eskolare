<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function province(){
        return $this->hasOne('App\Models\Province', 'id', 'province_id');
    }

    public function learn(){
        return $this->hasOne('App\Models\Learn', 'id', 'learn_id');
    }
}
