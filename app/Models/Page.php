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

class Page extends Model implements HasMedia
{
    use HasFactory;
    use HasMediaLibrary;
    use HasFlexible;

    protected $casts = [
        'content' => 'array'
    ];
}
