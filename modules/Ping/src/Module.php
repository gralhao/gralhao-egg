<?php

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
