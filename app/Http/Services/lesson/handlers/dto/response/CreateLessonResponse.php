<?php

namespace App\Http\Services\lesson\handlers\dto\response;

use App\Models\Lesson;
use App\Models\LessonTag;

class CreateLessonResponse
{
    private Lesson $lesson;

    /* @var $lessonTags LessonTag[] */
    private array $lessonTags;

    /**
     * @param Lesson $lesson
     * @param LessonTag[] $lessonTags
     */
    public function __construct(Lesson $lesson, array $lessonTags)
    {
        $this->lesson = $lesson;
        $this->lessonTags = $lessonTags;
    }

    /**
     * @return Lesson
     */
    public function getLesson(): Lesson
    {
        return $this->lesson;
    }

    /**
     * @return array
     */
    public function getLessonTags(): array
    {
        return $this->lessonTags;
    }
}
