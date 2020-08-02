<?php

/**
 * @see       https://github.com/gralhao/gralhao-egg
 * @copyright https://github.com/gralhao/gralhao-egg/blob/master/COPYRIGHT.md
 * @license   https://github.com/gralhao/gralhao-egg/blob/master/LICENSE.md
 */

return [
    'modules' => [
        'Ping'
    ],
    'application' => [
        'name' => getenv('APPLICATION_NAME') ?: 'No Name'
    ],
];
