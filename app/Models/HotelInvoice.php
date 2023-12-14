<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelInvoice extends Model
{
    use HasFactory;
    protected $table = 'hotel_invoice';

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
