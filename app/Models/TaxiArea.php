<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxiArea extends Model
{
    use HasFactory;
    protected $table = 'taxi_area';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'Id',
        'PickPoint',
        'created_at',
        'updated_at'
    ];
}
