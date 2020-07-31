<?php

declare(strict_types=1);

namespace Ping\Controllers;

class PingController extends \Gralhao\Controller
{
    public function get(): void
    {
        $this->send([
            'ping' => true
        ]);
    }
}
