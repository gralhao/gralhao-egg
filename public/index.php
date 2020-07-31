<?php

declare(strict_types=1);

try {
    require __DIR__ . '/../vendor/autoload.php';
    $bootstrap = new \Gralhao\Bootstrap();
    $app = $bootstrap->getApp();
    $app->notFound(function () use ($app) {
        $app->response->setStatusCode(404);
        $app->response->setJsonContent([]);
        $app->response->send();
    });
    $bootstrap->init();
} catch (\Throwable $th) {
    echo $th->getMessage();
}
