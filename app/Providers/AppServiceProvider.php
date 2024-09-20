<?php

namespace App\Providers;

use ChrisReedIO\Socialment\Facades\Socialment;
use Illuminate\Support\ServiceProvider;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Laravel\Pulse\Facades\Pulse;
use ChrisReedIO\Socialment\Models\ConnectedAccount;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Resource::scopeToTenant(false);
        Pulse::user(fn($user) => [
            'name' => $user->name,
            'extra' => $user->email,
            'avatar' => '/storage/' . $user->avatar_url,
        ]);
        Event::listen(

            \SocialiteProviders\Manager\SocialiteWasCalled::class,

            \SocialiteProviders\Azure\AzureExtendSocialite::class . '@handle',
            \SocialiteProviders\Google\GoogleExtendSocialite::class. '@handle',
        );
         // Post Login Hook
    Socialment::preLogin(function (ConnectedAccount $connectedAccount) {
        // Handle custom pre login logic here.
    });

    // Multiple hooks can be added
    Socialment::preLogin(function (ConnectedAccount $connectedAccount) {
        // Handle additional custom pre login logic here if you need.
    });

    // Post Login Hook
    Socialment::postLogin(function (ConnectedAccount $connectedAccount) {
        // Handle custom post login logic here.
        Log::info('User logged in with ' . $connectedAccount->provider . ' account', [
            'connectedAccount' => $connectedAccount,
        ]);
    });
    }
}
