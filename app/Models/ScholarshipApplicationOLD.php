<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\HasMany;

class ScholarshipApplication extends Model
{
     protected $fillable = [
        'user_id',
        'status',

        'first_name',
        'last_name',
        'email',
        'date_of_birth',

        'address',
        'city',
        'state',
        'zip',
        'phone',

        'high_school',
        'graduation_date',
        'gpa',
        'first_generation_college',
        'intended_college',
        'intended_major',

        'parent_guardian_name',
        'parent_guardian_phone',
        'parent_guardian_email',

        'activities',
        'community_service',
        'awards',

        'student_statement',
        'certification',
        'submitted_at',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'graduation_date' => 'date',
        'first_generation_college' => 'boolean',
        'certification' => 'boolean',
        'submitted_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /*

    public function documents(): HasMany
    {
        return $this->hasMany(ScholarshipDocument::class);
    }
        */
}
