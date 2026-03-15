<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Whitecube\NovaFlexibleContent\Casts\FlexibleCast;
use App\Events\VacancySaving;

class Vacancy extends Model implements HasMedia
{
    use HasFactory;
    use HasMediaLibrary;
    use HasFlexible;

    protected $dispatchesEvents = [
        'saving' => VacancySaving::class,
    ];

    protected $casts = [
        'content' => 'array'
    ];
}
