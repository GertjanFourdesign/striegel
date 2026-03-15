<?php

namespace App\Listeners;

use App\Events\VacancySaving;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;
use App\Models\Vacancy;

class GenerateVacancySlug
{
    /**
     * Create the event listener.
     */
    public function handle(VacancySaving $event)
    {
        $event->vacancy->slug = Str::slug($event->vacancy->title);
    }
}
