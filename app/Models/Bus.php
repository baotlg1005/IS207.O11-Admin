<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = 'bus';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'ai_id', // 'ai_id' is the primary key of the table 'bus
        'Id',
        'From',
        'To',
        'Date',
        'DepartureTime',
        'ArrivalTime',
        'TravelTime',
        'PickPoint',
        'DesPoint',
        'Name',
        'SeatCount',
        'NumSeat',
        'Price',
        'created_at',
        'updated_at',
    ];
}
