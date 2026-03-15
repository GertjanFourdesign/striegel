<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;
use App\Events\PostSaving;


class GeneratePostSlug
{
    /**
     * Create the event listener.
     */
    public function handle(PostSaving $event)
    {
        $event->post->slug = Str::slug($event->post->title);
    }
}
