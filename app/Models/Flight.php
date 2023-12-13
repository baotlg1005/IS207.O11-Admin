<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'flight';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ID',
        'From',
        'To',
        'Date',
        'DepartureTime',
        'ArrivalTime',
        'TravelTime',
        'Stop/Direct',
        'Name',
        'SeatClass',
        'NumSeat',
        'Price',
    ];
}