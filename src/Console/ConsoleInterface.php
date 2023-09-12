<?php namespace Contracts\Console;

interface ConsoleInterface
{
    public function add($command);
    public function find(string $name);
}
