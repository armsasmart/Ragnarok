<?php

namespace App\Providers;

use App\Domains\Users\Components\OverviewSubtitle;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class BladeComponentProvider
 *
 * @package App\Providers
 */
class BladeComponentProvider extends ServiceProvider
{
    public function boot(): void
    {
        // User Related components
        Blade::component(OverviewSubtitle::class, 'user-overview-subtitle');
        Blade::component('users._sidenav', 'account-sidenav');
        Blade::component('users.settings._sidenav', 'profile-settings-nav');

        // API components
        Blade::component('api._token-modal', 'token-modal');

        // Role related components
        Blade::component('roles._sidenav', 'role-information-sidenav');

        // Layout components
        Blade::component('layouts._kioskNavbar', 'kiosk-navbar');
        Blade::component('components.flashMessage', 'flash-session');
        Blade::component('layouts.app', 'app-layout');
    }
}
