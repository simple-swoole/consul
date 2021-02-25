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

interface CatalogInterface
{
    public function register($node): ConsulResponse;

    public function deregister($node): ConsulResponse;

    public function datacenters(): ConsulResponse;

    public function nodes(array $options = []): ConsulResponse;

    public function node($node, array $options = []): ConsulResponse;

    public function services(array $options = []): ConsulResponse;

    public function service($service, array $options = []): ConsulResponse;
}
