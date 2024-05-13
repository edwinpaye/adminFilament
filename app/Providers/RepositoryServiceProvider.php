<?php

namespace App\Providers;

use App\Interfaces\GalleryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\GalleryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(GalleryRepositoryInterface::class, GalleryRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
