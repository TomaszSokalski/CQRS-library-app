<?php

declare(strict_types=1);

namespace App\Book\Domain\Entity;

class Book
{
    public function __construct(
        private readonly string $id,
        private readonly string $title,
        private readonly string $author,
        private readonly string $status = BookStatus::AVAILABLE,
        private readonly \DateTime $publicationDate,
    ) {
    }
}