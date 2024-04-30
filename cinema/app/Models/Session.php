<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['hall_id', 'movie_id', 'sessionStart', 'duration', 'sessionEnd', 'created_at', 'updated_at'];

    protected $visible = ['id', 'hall_id', 'movie_id', 'sessionStart', 'sessionEnd', 'duration'];
}
