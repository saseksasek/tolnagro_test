<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\EmailRepositoryInterface;
use App\Repositories\EmailRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmailRepositoryInterface::class, EmailRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
