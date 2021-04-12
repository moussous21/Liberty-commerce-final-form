<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admin';

    public function new_product()
    {
        return $this->hasOne('App\Model\new_product');
    }
    public function page_product()
    {
        return $this->hasOne('App\Model\page_product');
    }
}
