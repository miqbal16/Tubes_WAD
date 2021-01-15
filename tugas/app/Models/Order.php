<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function Order() {
        return $this->hasOne('App\Models\Order');
    }
    use HasFactory;
    
    public $timestamps = false; 
    protected $table = 'order';

    protected $fillable = [
        'name','email','id_car','name_car','alamat','mulai','kembali','no_polisi','no_hp','pembayaran','status_pembayaran','status_car','total, tahun_kendaraan'
    ];
}
