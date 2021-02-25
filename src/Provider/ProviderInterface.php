<?php namespace Contracts\Provider;

use Psr\Container\ContainerInterface;

interface ProviderInterface
{
    public function __construct(ProviderAggregateInterface $aggregate);
    public function container(): ?ContainerInterface;
}
