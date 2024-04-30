<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatNumber extends Model
{
    use HasFactory;

    protected $fillable = ['hall_id', 'rowNumber', 'seatNumber', 'type_id', 'created_at', 'updated_at'];
    
    protected $visible = ['id', 'hall_id', 'rowNumber', 'seatNumber', 'type_id'];
}
