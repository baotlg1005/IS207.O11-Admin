<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;
    protected $table = 'passport';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Id',
        'Nation',
        'Number',
        'Expiration',
    ];
}
