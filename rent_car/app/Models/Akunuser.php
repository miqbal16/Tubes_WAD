<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akunuser extends Model
{ public function Order() {
    return $this->hasOne('App\Models\Order');
}
use HasFactory;

public $timestamps = false; 
protected $table = 'akunuser';

protected $fillable = [
   'nama', 'email', 'password', 'passwordconfirmation'
];
}
