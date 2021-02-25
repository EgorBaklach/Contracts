<?php namespace Contracts\Inflector;

use Psr\Container\ContainerInterface;

interface InflectorInterface
{
    public function __construct(InflectorAggregateInterface $aggregate);
    public function container(): ?ContainerInterface;
}
