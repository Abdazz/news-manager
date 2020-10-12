<?php

namespace Abdazz\PostsManager;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class PostsManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Abdazz\PostsManager\PostsManagerController');
        $this->loadViewsFrom(__DIR__.'/views', 'posts-manager');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/posts-manager'),
        ]);

        $this->loadViewsFrom(__DIR__.'/views', 'posts-manager');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/posts-manager'),
        ]);


        $this->publishes([
            __DIR__.'/factories' => database_path('factories')
        ], 'factories');

        $this->publishes([
            __DIR__.'/Mail' => database_path('factories')
        ], 'mail');

        $this->publishes([
            __DIR__.'/helpers' => app_path(),
        ]);

        $this->publishes([
            __DIR__.'/config/posts_manager.php' => config_path('posts_manager.php'),
        ]);
    }
}
