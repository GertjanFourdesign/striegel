<?php

namespace App\Nova\Flexible\Presets;

use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Preset;
use App\Nova\Flexible\Layouts\TextImageLayout;
use App\Nova\Flexible\Layouts\OverviewLayout;
use App\Nova\Flexible\Layouts\TextLayout;
use App\Nova\Flexible\Layouts\TextColumnsLayout;
use App\Nova\Flexible\Layouts\QuoteLayout;
use App\Nova\Flexible\Layouts\LargeImagesLayout;
use App\Nova\Flexible\Layouts\CarouselLayout;
use App\Nova\Flexible\Layouts\PageHero;

class PagePreset extends Preset
{
    /**
     * Execute the preset configuration
     *
     * @return void
     */
    public function handle(Flexible $field) : void
    {
        $field->fullWidth();
        
        $field->addLayout(TextLayout::class);
        $field->addLayout(TextColumnsLayout::class);
        $field->addLayout(TextImageLayout::class);
        $field->addLayout(LargeImagesLayout::class);
        $field->addLayout(CarouselLayout::class);
        $field->addLayout(OverviewLayout::class);
        $field->addLayout(QuoteLayout::class);
        $field->addLayout(PageHero::class);
        
        $field->button("Strook toevoegen");
    }
}