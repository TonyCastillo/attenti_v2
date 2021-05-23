<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'user_cuantity',
        'event_status',
        'activated_date',
        'company_date',
        'company_id'
    ];   
}
