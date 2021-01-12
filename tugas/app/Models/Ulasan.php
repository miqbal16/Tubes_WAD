<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    public function Order() {
        return $this->hasOne('App\Models\Order');
    }
    use HasFactory;
    
    public $timestamps = false; 
    protected $table = 'ulasan';

    protected $fillable = [
        'email','name','description'
    ];
}