## Laravel SSL Protocol
[![Latest Stable Version](https://poser.pugx.org/riseno/localizable/v/stable)](https://packagist.org/packages/riseno/localizable) [![Total Downloads](https://poser.pugx.org/riseno/localizable/downloads)](https://packagist.org/packages/riseno/localizable) [![License](https://poser.pugx.org/riseno/localizable/license)](https://packagist.org/packages/riseno/localizable)

Laravel SSL middleware that force http request to https for cloudflare flexible ssl service.

### Installation

Require this package with composer using the following command:

```bash
composer require riseno/laravel-ssl-protocol
```

After updating composer, add the middleware to the `middleware` array in `app/http/Kernel.php` if you want to make it globally enabled.

```php
Riseno\SSLProtocol\SSLMiddleware::class,
```

### License

The Laravel SSL Protocol is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)