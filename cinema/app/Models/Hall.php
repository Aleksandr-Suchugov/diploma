<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rowNumber', 'seatNumber', 'isActive'];

    protected $visible = ['name', 'rowNumber', 'seatNumber', 'isActive'];
}
