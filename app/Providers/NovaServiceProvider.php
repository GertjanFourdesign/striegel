<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Panel;
use Manogi\Tiptap\Tiptap;

use Outl1ne\NovaSettings\NovaSettings;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        NovaSettings::addSettingsFields([

            Panel::make('Contactgegevens', [
                Text::make('Telefoonnummer', 'phone'),
                Text::make('E-mailadres', 'email'),
                Text::make('Linkedin', 'linkedin'),
            ]),

            Panel::make('CTA', [
                Text::make('Titel', 'cta_title'),
                Tiptap::make('Tekst', 'cta_text')
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
                    ]),
            ]),
        ]);

        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaSettings,
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
