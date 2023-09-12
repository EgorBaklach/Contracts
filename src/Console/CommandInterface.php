<?php namespace Contracts\Console;

use Psr\Container\ContainerInterface;

interface CommandInterface
{
    public function setContainer(ContainerInterface $container);
    public function construct();
}