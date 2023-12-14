<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightInvoice extends Model
{
    use HasFactory;
    protected $table = 'flight_invoice';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Id',
        'Flight_id',
        'Invoice_id',
        'Num_ticket',
    ];
}
