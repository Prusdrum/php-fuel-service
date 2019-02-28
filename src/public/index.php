<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Slim\Container;
use Slim\App;
use GuzzleHttp\Client as HttpClient;

$container = new Container();

$container['HttpClient'] = function() {
    return new HttpClient();
};

$app = new App($container);


$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();