<?php

declare(strict_types=1);

namespace Test\Prometheus\Redis;

use Prometheus\Storage\Redis;
use Test\Prometheus\AbstractGaugeTest;

/**
 * See https://prometheus.io/docs/instrumenting/exposition_formats/
 * @requires extension redis
 */
class GaugeTest extends AbstractGaugeTest
{
    public function configureAdapter()
    {
        $this->adapter = new Redis(['host' => REDIS_HOST]);
        $this->adapter->wipeStorage();
    }
}
