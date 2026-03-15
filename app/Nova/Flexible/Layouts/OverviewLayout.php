<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Select;

class OverviewLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'overview-layout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Overzicht';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Overzicht', 'overview')
                ->options([
                    'news_preview' => 'Nieuws preview',
                    'call_to_action' => 'Call to action',
                ])
        ];
    }
}
