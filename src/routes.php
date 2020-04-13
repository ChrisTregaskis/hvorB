<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

    //Only for developing FE. Refactor when creating proper Route path
    $app->get('/users', function (Request $request, Response $response, array $args) use ($container) {
        return $container->get('renderer')->render($response, 'users.phtml', $args);
    });

    $app->get('/displayUsers', 'DisplayUsersController');

};
