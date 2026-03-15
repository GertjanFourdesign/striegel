<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\PostSaving;
use App\Listeners\GeneratePostSlug;
use App\Events\VacancySaving;
use App\Listeners\GenerateVacancySlug;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        PostSaving::class => [
            GeneratePostSlug::class
        ],

        VacancySaving::class => [
            GenerateVacancySlug::class
        ]
    ];

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
        //
    }
}
