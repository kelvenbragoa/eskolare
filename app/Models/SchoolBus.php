<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolBus extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function school(){
        return $this->hasOne('App\Models\School', 'id', 'school_id');
    }
}
