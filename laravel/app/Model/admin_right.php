<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_right extends Model
{
    use HasFactory;
    protected $table = 'admin_right';

    public function admin()
    {
        return $this->hasOne('App\Model\admin');
    }
}
