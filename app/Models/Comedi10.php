<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comedi10 extends Model
{
    use HasFactory;

    public function comedi31s()
    {
        return $this->hasMany(Comedi31::class, 'cven', 'cven');
    }
}
