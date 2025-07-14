<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\SpatieLaravelTranslatablePlugin;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use LaraZeus\Sky\Filament\Resources\FaqResource;
use LaraZeus\Sky\SkyPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->plugins([
                SpatieLaravelTranslatablePlugin::make()
                    //If you don't use multi-language
                    ->defaultLocales([config('app.locale')])
                    // or if you have more
                    ->defaultLocales(['en', 'pt']),

                SkyPlugin::make()
                    ->navigationGroupLabel('Sky')

                    // the default models, by default Sky will read from the config file 'zeus-sky'.
                    // but if you want to customize the models per panel, you can do it here
                    ->models([
                        // ...
                        'Tag' => \LaraZeus\Sky\Models\Tag::class,
                    ])

                    // available tags
                    ->tagTypes([
                        'tag' => 'Tag',
                        'category' => 'Category',
                        'library' => 'Library',
                        'faq' => 'Faq',
                    ])

                    // disable a Resource, if you dont use it, or want to replace them with your own resource
                    ->postResource()
                    ->pageResource()
                    ->faqResource()
                    ->libraryResource()
                    ->tagResource()
                    ->navigationResource()

                    // hide a Resource, if you need to register them, but want to hide them from the sidebar navigation
                    ->hideResources([
                        FaqResource::class,
                    ])
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
