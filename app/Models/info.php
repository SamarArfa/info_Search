<?php

namespace App\Models;
use App\Models\cityOfHome;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Session;
use Illuminate\Support\Facades\DB;

class info extends Model
{
    use HasFactory;
    public  function cityofhome(){
        // return $this->belongsTo(cityOfHome::Class);
        return $this->belongsTo('App\Models\cityOfHome','id');

    }
    protected $primaryKey = 'ssn'; // or null

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'integer';
}
