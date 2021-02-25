<?php namespace Contracts\Provider;

interface ProviderAggregateInterface
{
    public function __construct(array $providers);
    public function resolve($provider);
}
