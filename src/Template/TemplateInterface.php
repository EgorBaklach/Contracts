<?php namespace Contracts\Template;

interface TemplateInterface
{
    public function init(string $path, string $extension = 'php', array $extensions = []);
    public function render(string $name, array $params = []): string;
}
