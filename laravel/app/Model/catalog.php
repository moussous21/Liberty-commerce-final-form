<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    use HasFactory;
    protected $table = 'catalog';

    public function homepage()
    {
        return $this->hasOne('App\Model\homepage');
    }
}
