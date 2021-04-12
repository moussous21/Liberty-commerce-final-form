<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comment';

    public function confirmation_payment()
    {
        return $this->hasOne('App\Model\confirmation_payment');
    }
}
