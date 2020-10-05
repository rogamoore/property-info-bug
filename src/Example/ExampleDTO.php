<?php

declare(strict_types=1);


namespace App\Example;


final class ExampleDTO
{
    private ?string $example;

    public function __construct(?string $example)
    {
        $this->example = $example;
    }

    public function getExample(): string
    {
        return $this->example ?? 'fallback';
    }
}
