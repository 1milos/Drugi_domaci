<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = ['rate', 'name', 'min_period', 'max_period', 'min_amount', 'max_amount'];
}
