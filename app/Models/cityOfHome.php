<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class cityOfHome extends Model
{
    use HasFactory;
    public  function info(){
        // return $this->hasMany(info::Class,'cityOfHome');
        return $this->hasMany('App\info','cityOfHome','name');

    }
}
