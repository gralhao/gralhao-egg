<?php

declare(strict_types=1);

namespace Ping\Collections;

use Ping\Controllers\PingController;

class PingCollection extends \Gralhao\Collection
{
    public function __construct()
    {
        $this->setHandler(PingController::class)
            ->setPrefix('/ping')
            ->get('', 'get');
    }
}
