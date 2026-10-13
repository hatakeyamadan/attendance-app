<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StampCorrectionRequest extends Model
{
    use HasFactory;

     protected $fillable = [
        'attendance_id',
        'user_id',
        'proposed_clock_in',
        'proposed_clock_out',
        'reason',
        'status',
        'approved_by',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function attendance(): BelongsTo
    {
        return $this->belongsTo(Attendance::class);
    }
}
