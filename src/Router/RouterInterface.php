<?php namespace Contracts\Router;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;

interface RouterInterface
{
    public function map(string $method, string $path, $handler);
    public function group(string $prefix, callable $group);
    public function middleware(MiddlewareInterface $middleware);
    public function dispatch(ServerRequestInterface $request): ResponseInterface;
}
