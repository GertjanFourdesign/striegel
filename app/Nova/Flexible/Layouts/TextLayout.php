<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Advoor\NovaEditorJs\NovaEditorJs;
use Manogi\Tiptap\Tiptap;

class TextLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'text-layout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Smalle tekst';

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
        ];
    }

}
