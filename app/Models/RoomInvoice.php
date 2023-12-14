<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomInvoice extends Model
{
    use HasFactory;
    protected $table = 'room_invoice';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Id',
        'Room_id',
        'Check_in',
        'Check_out',
        'Invoice_id',
    ];
}
