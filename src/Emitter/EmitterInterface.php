<?php namespace Contracts\Emitter;

use Contracts\Router\RouterInterface;

interface EmitterInterface
{
    public function emit(RouterInterface $router): bool;
}