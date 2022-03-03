<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolMaterial extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function material(){
        return $this->hasOne('App\Models\Material', 'id', 'material_id');
    }

    public function grade(){
        return $this->hasOne('App\Models\Grade', 'id', 'grade_id');
    }
}
