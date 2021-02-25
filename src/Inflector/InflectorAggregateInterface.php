<?php namespace Contracts\Inflector;

interface InflectorAggregateInterface
{
    public function __construct(array $inflectors);
    public function resolve(string $type, $inflector);
}
