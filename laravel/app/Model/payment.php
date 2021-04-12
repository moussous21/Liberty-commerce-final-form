<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = 'payment';


    public function confiramtion_payment()
    {
        return $this->hasOne('App\Model\confiramtion_payment');
    }
}
