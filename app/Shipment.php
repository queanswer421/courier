<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'senderCity', 'senderStreet', 'receiverCity', 'receiverStreet',
    ];
    public function history()
    {
        return $this->hasOne(History::class);
    }
}
