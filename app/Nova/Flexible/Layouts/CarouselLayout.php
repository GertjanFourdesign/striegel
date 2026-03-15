<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Image;
use Advoor\NovaEditorJs\NovaEditorJs;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Manogi\Tiptap\Tiptap;
use Ayvazyan10\Imagic\Imagic;

class CarouselLayout extends Layout implements HasMedia
{
    use HasMediaLibrary;
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'carousel-layout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Carousel';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Tiptap::make('Tekst', 'text')
                ->buttons([
                    'heading',
                    '|',
                    'italic',
                    'bold',
                    '|',
                    'link',
                    'code',
                    'strike',
                    'underline',
                    '|',
                    'bulletList',
                    'orderedList',
                ])
                ->required(),

                Images::make('Image', 'images'),
        ];
    }
}
