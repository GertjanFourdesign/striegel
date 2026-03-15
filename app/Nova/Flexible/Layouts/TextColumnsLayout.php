<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Manogi\Tiptap\Tiptap;

class TextColumnsLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'text-columns';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Tekst kolommen';

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
            Tiptap::make('Tekst', 'text')
                ->buttons($buttons),

            Tiptap::make('Tekst', 'text_2')
                ->buttons($buttons),
        ];
    }

}
