<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'flight';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ai_id', // 'ai_id' is the primary key of the table 'flight
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
        'created_at',
        'updated_at',
    ];
}