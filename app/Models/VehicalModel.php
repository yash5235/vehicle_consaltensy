<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicalModel extends Model
{
    use HasFactory;

    protected $table = 'models';

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }

}
