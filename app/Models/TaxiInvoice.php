<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxiInvoice extends Model
{
    use HasFactory;
    protected $table = 'taxi_invoice';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Id',
        'Taxi_id',
        'DepartureDay',
        'TimeStart',
        'ArrivalTime',
        'TimeEnd',
        'Invoice_id',
    ];
}
