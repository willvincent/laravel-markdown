<?php

namespace willvincent\LaravelMarkdown;

use Illuminate\Support\ServiceProvider;
use willvincent\LaravelMarkdown\LaravelMarkdown;

class LaravelMarkdownServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Expose config file so it can be published into the app with artisan.
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/../config/markdown.php' => config_path('markdown.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
      $this->app->singleton('laravel_markdown', function ($app) {
            $config = config('markdown');

            if (!$config) {
                throw new \RunTimeException('Laravel Markdown configuration not found. Please run `php artisan vendor:publish`');
            }

            return new LaravelMarkdown($config);
        });
    }

    /**
     * Get the service(s) provided by this provider.
     *
     * @return array
     */
    public function provides() {
        return ['laravel_markdown'];
    }
}
