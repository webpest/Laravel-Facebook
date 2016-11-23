# Laravel Facebook

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-facebook
```

Add the service provider to `config/app.php` in the `providers` array.

```php
BrianFaust\Facebook\ServiceProvider::class
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in `config/app.php` to your aliases array.

```php
'FBAuth' => BrianFaust\Facebook\Facades\Facebook::class
```

## Usage

``` php
Route::get('/facebook', function (Request $request) {
    $facebook = FBAuth::create([
        'clientId' => 'your-client-id',
        'clientSecret' => 'your-client-secret',
        'redirectUri' => 'https://homestead.app/facebook',
    ]);

    try {
        $response = $facebook->authorize($request);

        if (is_string($response)) {
            return redirect($response);
        }

        dd($facebook->getUser());
    } catch (Exception $e) {
        dd('Error: '. $e->getMessage());
    }
});
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
