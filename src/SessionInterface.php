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

interface SessionInterface
{
    public function create($body = null, array $options = []): ConsulResponse;

    public function destroy($sessionId, array $options = []): ConsulResponse;

    public function info($sessionId, array $options = []): ConsulResponse;

    public function node($node, array $options = []): ConsulResponse;

    public function all(array $options = []): ConsulResponse;

    public function renew($sessionId, array $options = []): ConsulResponse;
}
