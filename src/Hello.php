<?php
declare(strict_types=1);

namespace App;

class Hello
{
    public function __construct(private string $name='某'){}

    public function say(): string
    {
        return "Hello, {$this->name}さん";
    }
}
