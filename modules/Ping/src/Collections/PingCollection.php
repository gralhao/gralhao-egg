<?php

/**
 * @see       https://github.com/gralhao/gralhao-egg
 * @copyright https://github.com/gralhao/gralhao-egg/blob/master/COPYRIGHT.md
 * @license   https://github.com/gralhao/gralhao-egg/blob/master/LICENSE.md
 */

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
