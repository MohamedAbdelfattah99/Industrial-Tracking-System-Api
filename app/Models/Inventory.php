<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    public function factory()
    {
        return $this->belongsTo('App\Factory');
    }
    //----------------------------------------
       public function orders()
    {
        return $this->hasMany('App\Order');
    }
        public function products()
    {
        return $this->hasMany('App\Product');
    }
}
