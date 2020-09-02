<?php

/**
 * Autoload global dependencies and allow for auto-loading local dependencies via use
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Boot up application, AKA Turn the lights on.
 */
$app = require __DIR__ . '/../bootstrap/app.php';


$app->any('{route:.*}', function($request, $response) {
  $response->withStatus(404, 'page not found');
  // var_dump($response);
  // die();
  // $response->getBody()->write($request);
  return $response;
});



/**
 * 
 * 
 * Passing our Request through the app
 */
$app->run();
