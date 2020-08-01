<?php

declare(strict_types=1);

namespace Ping\Controllers;

class PingController extends \Gralhao\Controller
{
    public function get(): void
    {
        $this->send([
            'application' => [
                'name' => $this->config->application->name
            ],
            'ping' => true
        ]);
    }
}
