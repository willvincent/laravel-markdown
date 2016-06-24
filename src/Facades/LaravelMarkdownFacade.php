<?php
namespace willvincent\LaravelMarkdown\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelMarkdownFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'laravel_markdown';
    }
}
