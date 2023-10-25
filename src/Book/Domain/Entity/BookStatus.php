<?php

declare(strict_types=1);

namespace App\LibraryCQRS\Book\Domain\Entity;

namespace App\Book\Domain\Entity;

final class BookStatus
{
    public const AVAILABLE = 'available';
    public const UNAVAILABLE = 'unavailable';
    public const STATUSES = [
        self::AVAILABLE,
        self::UNAVAILABLE,
    ];
}