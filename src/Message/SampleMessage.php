<?php

declare(strict_types=1);

namespace App\Message;

final class SampleMessage
{
    public function __construct(private array $content)
    {
    }

    public function getContent(): array
    {
        return $this->content;
    }
}