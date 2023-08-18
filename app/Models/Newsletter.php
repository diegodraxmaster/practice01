<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    public function relacion()
    {
        return $this->belongsTo(Comprobante::class, 'id');
    }
}
