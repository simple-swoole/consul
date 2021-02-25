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

interface KVInterface
{
    public function get($key, array $options = []): ConsulResponse;

    public function put($key, $value, array $options = []): ConsulResponse;

    public function delete($key, array $options = []): ConsulResponse;
}
