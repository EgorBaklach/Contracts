<?php namespace Contracts\Cache;

use Psr\SimpleCache\CacheInterface;

interface RememberInterface extends CacheInterface
{
    public function forever(string $key, callable $callback);
    public function remember(string $key, ?int $ttl, callable $callback);
}
