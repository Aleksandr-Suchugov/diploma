<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['hall_id', 'type_id', 'price', 'created_at', 'updated_at'];

    protected $visible = ['type_id', 'price'];
}
