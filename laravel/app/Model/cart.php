<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    public function payment()
    {
        return $this->hasOne('App\Model\payment');
    }
    public function page_product()
    {
        return $this->hasMany('App\Model\page_product');
    }
    public function homepage()
    {
        return $this->hasOne('App\Model\homepage');
    }
}
