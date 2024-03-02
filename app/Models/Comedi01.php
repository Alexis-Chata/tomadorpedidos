<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comedi01 extends Model
{
    use HasFactory;

    protected $table = 'comedi01';

    /**
     * Get the Comedi02(stock) associated with the Comedi01(Producto).
     */
    public function comedi02(): HasOne
    {
        return $this->hasOne(Comedi02::class, 'ccodart', 'ccodart');
    }

    public function comedilps()
    {
        return $this->hasMany(Comedilp::class, 'ccodart', 'ccodart');
    }
}
