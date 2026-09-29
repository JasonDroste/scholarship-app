<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScholarshipDocument extends Model
{
    protected $fillable = [
        'scholarship_application_id',
        'type',
        'original_name',
        'path',
        'mime_type',
        'size',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(
            ScholarshipApplication::class
        );
    }
}
