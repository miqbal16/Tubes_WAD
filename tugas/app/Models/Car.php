<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function Order() {
        return $this->hasOne('App\Models\Order');
    }
    use HasFactory;
    
    public $timestamps = false; 
    protected $table = 'car_list';

    protected $fillable = [
        'name','price','description','isi_penumpang','pintu','img_path','no_polisi','status','tahun'
    ];
}
