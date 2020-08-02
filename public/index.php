<?php

/**
 * @see       https://github.com/gralhao/gralhao-egg
 * @copyright https://github.com/gralhao/gralhao-egg/blob/master/COPYRIGHT.md
 * @license   https://github.com/gralhao/gralhao-egg/blob/master/LICENSE.md
 */

try {
    require __DIR__ . '/../vendor/autoload.php';
    $bootstrap = new \Gralhao\Bootstrap();
    $app = $bootstrap->getApp();
    $app->notFound(function () use ($app) {
        $app->response->setStatusCode(404);
        $app->response->send();
    });
    $bootstrap->init();
} catch (\Throwable $th) {
    echo $th->getMessage();
}
