<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    // turn off mass assignment operation 
    protected $guarded = [];

     public function customers()
    {
        # code...

        return $this->hasMany(Customer::class );
    }
}
