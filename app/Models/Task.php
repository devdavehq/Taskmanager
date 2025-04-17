<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'status',
    ];


    protected $casts = [
    'due_date' => 'datetime',  // This converts the string to a Carbon instance
    // other casts...
];
    public function isOverdue(): bool
    {
        // Check if due_date exists and is in the past
        return $this->due_date && now()->gt($this->due_date);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
