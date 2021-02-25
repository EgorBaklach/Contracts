<?php namespace Contracts\Template;

interface TemplateInterface
{
    public function __construct(string $path, string $extension = 'php');
    public function render(string $name, array $params = []): string;
}
