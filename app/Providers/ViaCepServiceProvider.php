<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

use App\Services\ZipcodeService;
use App\Http\HttpClient;

class ViaCepServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ZipcodeService::class, function (Application $app) {
            $http = new HttpClient();

            return new ZipcodeService(
                $http->client,
                config('services.via_cep.url'),
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
