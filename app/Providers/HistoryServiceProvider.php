<?php

namespace App\Providers;

use App\Service\History\History;
use Illuminate\Support\ServiceProvider;

class HistoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(History::class, function () {
            return new History();
        });
    }
}
