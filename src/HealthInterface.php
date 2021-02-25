<?php

declare(strict_types=1);
/**
 * This file is part of Simps.
 * This file is copied from Hyperf.
 *
 * @link     https://simps.io
 * @document https://doc.simps.io
 * @license  https://github.com/simple-swoole/consul/blob/master/LICENSE
 */
namespace Simps\Consul;

interface HealthInterface
{
    public function node($node, array $options = []): ConsulResponse;

    public function checks($service, array $options = []): ConsulResponse;

    public function service($service, array $options = []): ConsulResponse;

    public function state($state, array $options = []): ConsulResponse;
}
