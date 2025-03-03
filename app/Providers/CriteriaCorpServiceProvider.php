<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class CriteriaCorpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       /* $this->app->bind('criteria-corp-api', function ($app) {
            $apiKey = config('services.criteria.api_key');
            $base_url = config('services.criteria.base_url');

            $client = new Client([
                'base_uri' => $base_url,
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
            ]);

            return $client;
        });*/
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
