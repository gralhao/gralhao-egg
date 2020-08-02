<?php

/**
 * @see       https://github.com/gralhao/gralhao-egg
 * @copyright https://github.com/gralhao/gralhao-egg/blob/master/COPYRIGHT.md
 * @license   https://github.com/gralhao/gralhao-egg/blob/master/LICENSE.md
 */

declare(strict_types=1);

namespace PingTest\Collections;

class PingCollectionTest extends \Gralhao\Test\TestCase
{
    public function setUp(): void
    {
        $this->bootstrap()->setRootPath('.');
    }

    public function testReturnPingRequestResponse(): void
    {
        $request = new \Gralhao\Test\Request();
        $request->setMethod('GET')
            ->setPath('/ping');
        $response = $this->dispatch($request);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(true, $response->data->ping);
    }
}
