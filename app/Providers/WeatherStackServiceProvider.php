<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

use App\Services\ForecastApiService;
use App\Http\HttpClient;

class WeatherStackServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ForecastApiService::class, function (Application $app) {
            $http = new HttpClient();

            return new ForecastApiService(
                $http->client,
                config('services.weather_stack.url'),
                config('services.weather_stack.key')
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
