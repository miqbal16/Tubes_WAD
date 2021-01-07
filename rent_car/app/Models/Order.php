<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function Order() {
        return $this->hasOne('App\Models\Product');
    }

    
    use HasFactory;


    public $timestamps = false; 
    protected $table = 'Orders';

    protected $fillable = [
        'product_id','amount','buyer_name','buyer_contact'
    ];
}
