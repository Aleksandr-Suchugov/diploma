<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['uuid', 'date', 'session_id', 'seatNumber_id', 'created_at', 'updated_at'];
}
