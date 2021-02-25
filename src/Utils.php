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

use Psr\Http\Message\RequestInterface;

class Utils
{
    public static function isHealthCheckRequest(RequestInterface $request): bool
    {
        return $request->getHeaderLine('user-agent') === 'Consul Health Check';
    }
}
