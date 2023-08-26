<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LessonTag extends Model
{
    protected $table = 'lesson_tags';

    protected $primaryKey = 'id';

    // LessonTag : Lesson = N : 1
    protected $fillable = [
        'name'
    ];

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
}
