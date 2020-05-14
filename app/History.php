<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}
