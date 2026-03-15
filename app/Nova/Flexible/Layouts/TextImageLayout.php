<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Boolean;
use Advoor\NovaEditorJs\NovaEditorJs;
use Laravel\Nova\Fields\KeyValue;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Manogi\Tiptap\Tiptap;
use Ayvazyan10\Imagic\Imagic;

class TextImageLayout extends Layout implements HasMedia
{
    use HasMediaLibrary;
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'text-image-layout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Afbeelding met tekst';

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
                
            Imagic::make('Afbeelding', 'images')
                ->convert($convert = true),
            Boolean::make('Afbeelding(en) rechts', 'reversed')
                ->default(true),
            Boolean::make('Afbeelding(en) tot einde zijkant pagina', 'large_image')
                ->default(false),
            Boolean::make('Scroll link', 'scroll_to')
                ->default(false),

            KeyValue::make(
                "Knoppen (evt)",
                "buttons"
            )->actionText('Voeg knop toe')
                ->keyLabel("Link")
                ->valueLabel(
                    "Tekst"
                ),
        ];
    }
}
