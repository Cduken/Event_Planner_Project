<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory; // Include this line to enable factory support

    // Fillable attributes for mass assignment
    protected $fillable = [
        'title',
        'event_date',
        // 'description', // Assuming you may want to add description later
        // 'location',    // Assuming you may want to add location later
    ];

    // Casts for data types
    protected $casts = [
        'event_date' => 'datetime',
    ];
}
