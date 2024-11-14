<?php

namespace App\Providers;

use App\Domain\Repositories\BookRepositoryInterface;
use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Infrastructure\Repositories\EloquentBookRepository;
use Illuminate\Support\ServiceProvider;
use App\Infrastructure\Repositories\ExternalBD1\CategoryRepository as ExternalBD1CategoryRepository;
use App\Infrastructure\Repositories\ExternalBD2\CategoryRepository as ExternalBD2CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BookRepositoryInterface::class, EloquentBookRepository::class);

        if (config('database.default_external') === 'external_db1') {
            $this->app->bind(CategoryRepositoryInterface::class, ExternalBD1CategoryRepository::class);
        } else {
            $this->app->bind(CategoryRepositoryInterface::class, ExternalBD2CategoryRepository::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
