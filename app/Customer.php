<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function phone(){
        return $this->hasOne('App\Phone', 'customer_id');
    }
   
}
