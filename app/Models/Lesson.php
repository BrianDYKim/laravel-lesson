<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{

    protected $table = 'lessons';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'issued_by'
    ];

    // Lesson : LessonTags = 1 : N
    public function lessonTags(): HasMany
    {
        return $this->hasMany(LessonTag::class, 'lesson_id');
    }
}
