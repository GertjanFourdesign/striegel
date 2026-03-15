<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Manogi\Tiptap\Tiptap;
use Laravel\Nova\Fields\Image;

class PageHero extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'page-hero';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Pagina hero';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        $buttons = [
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
        ];
        
        return [
            Tiptap::make('Tekst', 'text')->buttons($buttons),
            Image::make('Afbeelding', 'image'),
        ];
    }
}
