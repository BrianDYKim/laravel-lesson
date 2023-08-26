<?php

namespace App\Http\Services\lesson;

use App\Http\Services\lesson\handlers\dto\request\CreateLessonRequest;
use App\Http\Services\lesson\handlers\dto\response\CreateLessonResponse;
use App\Http\Services\lesson\handlers\LessonTagHandler;

class LessonService
{
    private LessonTagHandler $lessonTagHandler;

    public function __construct(LessonTagHandler $lessonTagHandler)
    {
        $this->lessonTagHandler = $lessonTagHandler;
    }

    /**
     * @return LessonTagHandler
     */
    public function getLessonTagHandler(): LessonTagHandler
    {
        return $this->lessonTagHandler;
    }

    public function createLesson(CreateLessonRequest $request): CreateLessonResponse
    {
        
    }
}
