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

class KV extends Client implements KVInterface
{
    public function get($key, array $options = []): ConsulResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['dc', 'recurse', 'keys', 'separator', 'raw', 'stale', 'consistent', 'default']),
        ];

        return $this->request('GET', '/v1/kv/' . $key, $params);
    }

    public function put($key, $value, array $options = []): ConsulResponse
    {
        $params = [
            'body' => json_encode($value),
            'query' => $this->resolveOptions($options, ['dc', 'flags', 'cas', 'acquire', 'release']),
        ];

        return $this->request('PUT', '/v1/kv/' . $key, $params);
    }

    public function delete($key, array $options = []): ConsulResponse
    {
        $params = [
            'query' => $this->resolveOptions($options, ['dc', 'recurse']),
        ];

        return $this->request('DELETE', '/v1/kv/' . $key, $params);
    }
}
