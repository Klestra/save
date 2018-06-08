<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function from()
    {
      return $this->belongsTo('App\from');
    }
}
