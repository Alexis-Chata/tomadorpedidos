<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comedi31 extends Model
{
    use HasFactory;

    protected $fillable = ['ccli'];

    public function comedi07(): HasOne
    {
        return $this->hasOne(Comedi07::class, 'ccli', 'ccli');
    }
}
