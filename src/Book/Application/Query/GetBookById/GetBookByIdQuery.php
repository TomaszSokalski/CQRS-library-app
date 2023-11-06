<?php

declare(strict_types=1);

namespace App\Book\Application\Query\GetBookById;

use App\Shared\Domain\Bus\Query\Query;

final class GetBookByIdQuery implements Query
{
    public function __construct(
        private readonly string $id
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}