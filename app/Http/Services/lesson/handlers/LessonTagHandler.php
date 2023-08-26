<?php

namespace App\Http\Services\lesson\handlers;

use App\Models\LessonTag;

class LessonTagHandler
{
    /**
     * @param string[] $tagNameList
     * @return LessonTag[]
     */
    public function createTags(array $tagNameList): array
    {
        return array_map([$this, 'createOneTag'], $tagNameList);
    }

    private function createOneTag(string $tagName): LessonTag {
        return LessonTag::create([
           'name' => $tagName
        ]);
    }
}
