<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Textarea;

class QuoteLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'quote-layout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Quote';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Textarea::make('Quote', 'quote')
                ->required(),
        ];
    }
}
