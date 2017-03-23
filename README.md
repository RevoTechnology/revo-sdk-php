# RevoSDK PHP Library

PHP Library to access Revo API

## Basic usage

Revo API implements four methods:

* check client's limit by phone number
* getting form link for preorder
* getting form link for full order process
* performing partial of full order return

API client must be configured as follows:

```php
<?php

$config = new RevoSDK\Config(
    [
      'testMode'=>true,
      'redirectUrl'=>'http://example.com/',
      'callbackUrl'=>'http://example.com/',
      'storeId'=>1,
      'secret'=>'secret'
    ]
);

```

* `testMode` indicates whether production or demo mode to use (by default set `true`)
* `redirectUrl` must be URL to which user will be redirected after form submit
* `callbackUrl` must be URL to which Revo will send callback data
* `storeId` - store id in Revo system
* `secret` - hash-like string for creating signature from Revo (must be stored privately)

After setting up `RevoSDK\Config` you may access API methods in `RevoSDK\API`.

### Example

```php
<?php

$client = new RevoSDK\API($config);
$response = $client->limitByPhone('9031234567');

```

See also the [examples](examples).

## Usage

To run this library, you first need to clone this repo and then install all
dependencies [through Composer](https://getcomposer.org):

```bash
$ composer install
```

To run `examples`, set proper credentials in config data and run:

```bash
$ php examples/revo_api_usage.php
```
