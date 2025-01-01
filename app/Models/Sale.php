<?php

namespace App\Models;

use App\Events\SaleCreated;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $dispatchesEvents = [
        'created' => SaleCreated::class,
    ];
}
