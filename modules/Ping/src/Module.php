<?php

/**
 * @see       https://github.com/gralhao/gralhao-egg
 * @copyright https://github.com/gralhao/gralhao-egg/blob/master/COPYRIGHT.md
 * @license   https://github.com/gralhao/gralhao-egg/blob/master/LICENSE.md
 */

declare(strict_types=1);

namespace Ping;

use Ping\Collections\PingCollection;

class Module extends \Gralhao\Module
{
    public function getConfig(): array
    {
        return [
            'collections' => [
                PingCollection::class,
            ],
        ];
    }
}
