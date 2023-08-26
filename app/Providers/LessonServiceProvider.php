<?php

namespace App\Providers;

use App\Http\Services\lesson\handlers\LessonTagHandler;
use App\Http\Services\lesson\LessonService;
use Illuminate\Support\ServiceProvider;

class LessonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // 추가적으로 handler 등이 필요한 경우 app()->make(anyClass::class 를 service의 인자로 넣어주면 됨)
        app()->singleton(LessonService::class, function () {
            return new LessonService(app()->make(LessonTagHandler::class));
        });
    }
}
