<?php

declare(strict_types=1);

namespace App\Shared\Application;

interface IdGeneratorInterface
{
    public function generate(): string;
}