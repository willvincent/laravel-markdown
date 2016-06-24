# Laravel Markdown

Provides a markdown parser facade, with optional typographical prettification using [SmartyPants](https://github.com/michelf/php-smartypants) to Laravel 5.x.

### Installation

Download the package with composer:
```
composer require willvincent/laravel-markdown
```
**NOTE:** You may need to add the following to your composer.json to allow dev packages to be installed:
```
"minimum-stability": "dev",
"prefer-stable": true
```

Update your config/app.php file to reference the provider and facade:
```
'providers' => [
    // ...
    willvincent\LaravelMarkdown\LaravelMarkdownServiceProvider::class,
],
```

```
'aliases' => [
    // ...

    'Markdown' => willvincent\LaravelMarkdown\Facades\LaravelMarkdownFacade::class,
],
```

Run `php artisan vendor:publish` to copy the default config file into your app's config directory; `config/markdown.php`


### Usage

Usage is simple, pass markdown you want to parse (and optionally prettify based on your config settings) to the `parse()` method of the Markdown facade.

```
// Assuming $text is a variable populated with markdown...
Markdown::parse($text)
```

Presumably most people will use this to display data loaded from their database within a blade template;

```
  <div class="parsed-markdown-text">{!! Markdown::parse($text) !!}</div>
```
