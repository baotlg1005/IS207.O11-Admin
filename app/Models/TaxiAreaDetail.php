<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxiAreaDetail extends Model
{
    use HasFactory;
    protected $table = 'taxi_area_detail';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'Pickpoint_id',
        'Taxi_id',
        'created_at',
        'updated_at'
    ];
}
