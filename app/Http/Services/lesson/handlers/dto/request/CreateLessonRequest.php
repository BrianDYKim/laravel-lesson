<?php

namespace App\Http\Services\lesson\handlers\dto\request;

class CreateLessonRequest
{
    private string $lessonTitle;

    private string $lessonIssuedBy;

    private array $lessonTags;

    public function __construct(string $lessonTitle, string $lessonIssuedBy, array $lessonTags) {
        $this->lessonTitle = $lessonTitle;
        $this->lessonIssuedBy = $lessonIssuedBy;
        $this->lessonTags = $lessonTags;
    }

    /**
     * @return string
     */
    public function getLessonTitle(): string
    {
        return $this->lessonTitle;
    }

    /**
     * @return string
     */
    public function getLessonIssuedBy(): string
    {
        return $this->lessonIssuedBy;
    }

    /**
     * @return array
     */
    public function getLessonTags(): array
    {
        return $this->lessonTags;
    }
}
