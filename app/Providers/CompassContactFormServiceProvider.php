<?php

namespace Modules\CompassContactForm\Providers;

use App\Providers\EventServiceProvider;
use Illuminate\Support\ServiceProvider;

class CompassContactFormServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'CompassContactForm';

    protected string $moduleNameLower = 'compasscontactform';

    public function register(): void
    {
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
