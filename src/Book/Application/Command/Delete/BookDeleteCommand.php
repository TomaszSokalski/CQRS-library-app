<?php

namespace App\Book\Application\Command\Delete;

use App\Shared\Domain\Bus\Command\Command;

final class BookDeleteCommand implements Command
{
    public function __construct(
        private readonly string $id,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}