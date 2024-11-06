<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DailyActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'agenda_date',
        'title',
        'created_by',
        'urgency',
        'assigned_to',
        'category',
        'status'
    ];

    protected $dates = [
        'agenda_date',
        'created_at',
        'updated_at'
    ];

    // Optional: Add date casting
    protected $casts = [
        'agenda_date' => 'date',
    ];
}
