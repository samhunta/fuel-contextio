# Fuel ContextIO

A FuelPHP package wrapping around the [ContextIO](http://context.io)'s official [PHP-ContextIO class](https://github.com/contextio/PHP-ContextIO).

## Documentation

Official documentation of the ContextIO API can be found at [http://context.io/docs/2.0/](http://context.io/docs/2.0/)

The official PHP-ContextIO library currently has no documentation but if needed can be easily obtained by parsing the docblocks in `classes/context.io.php` with something like [phpDocumentor](http://www.phpdoc.org/).

## Usage

Copy `config/contextio.php` into your `app/config/` directory and set the default access key and secret key.

You can now call any of the API methods on the `ContextIO` object.

You can also use the object without the default configuration:

```php
// Using these properties
ContextIO::forge(array(
      'secret_key' => 'secret key goes here',
      'access_key' => 'access key goes here',
));

// Or using these properties
ContextIO::forge( $access_key, $secret_key );
```

## Examples

You can call any method from the official PHP-ContextIO library.

Here's how you would return an array of accounts

```php
ContextIO::listAccounts()->getData();
```