<?php

/**
 * @see       https://github.com/gralhao/gralhao-egg
 * @copyright https://github.com/gralhao/gralhao-egg/blob/master/COPYRIGHT.md
 * @license   https://github.com/gralhao/gralhao-egg/blob/master/LICENSE.md
 */

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
