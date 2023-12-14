<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusInvoice extends Model
{
    use HasFactory;
    protected $table = 'bus_invoice';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Id',
        'Bus_id',
        'Num_ticket',
        'Invoice_id',
    ];
}
