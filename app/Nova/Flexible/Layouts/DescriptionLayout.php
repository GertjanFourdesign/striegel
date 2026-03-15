<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Trix;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Text;

class DescriptionLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "description";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Omschrijving";

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make("Titel", "title"),
            Trix::make("Omschrijving", "description"),
        ];
    }
}
