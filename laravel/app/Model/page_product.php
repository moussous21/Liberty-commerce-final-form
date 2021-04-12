<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page_product extends Model
{
    use HasFactory;
    protected $table = 'page_product';

    public function comment()
    {
        return $this->hasMany('App\Model\comment');
    }
    public function catalog()
    {
        return $this->hasMany('App\Model\catalog');
    }
}
