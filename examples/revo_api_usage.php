<?php

// Autoload files using Composer autoload

require_once '../vendor/autoload.php';

// Setting up config

$config = new RevoSDK\Config(
    [
      'testMode'=>true,
      'redirectUrl'=>'http://example.com/',
      'callbackUrl'=>'http://example.com/',
      'storeId'=>1,
      'secret'=>'secret'
    ]
);


// Setting up API client

$client = new RevoSDK\API($config);


//  Limit by phone method

$response = $client->limitByPhone('9031234567');
print_r($response);

// Result is stdClass object instance as follows:
//
// stdClass Object
// (
//    [mobile_phone] =>
//    [limit_amount] => 9950.00
//    [status] => active
// )

// Preorder form iframe link

$response = $client->preorderIframeLink();
print $response;

// Result is string which contains iframe link, for example:
// https://r.revoplus.ru/iframe/v1/form/d5f081cfbdb8b100d64985536f7b063b4b1bda05


// Order form iframe link

$response = $client->orderIframeLink(99.90, 'ORDER123');
print $response;

// Result is string which contains iframe link, for example:
// https://r.revoplus.ru/iframe/v1/form/302e6245644c1bf64b87a3abca9a8f2e9b89eef1


// Order return method

$response = $client->returnOrder(9.99, 'ORDER123456');
print_r($response);

// Result is array as follows:
//
// (
//    [status] => ok
// )
