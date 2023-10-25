<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure;

use App\Shared\Application\IdGeneratorInterface;
use Symfony\Component\Uid\Uuid;

final class SymfonyUuidGenerator implements IdGeneratorInterface
{
    public function generate(): string
    {
        return (string)Uuid::v4();
    }
}