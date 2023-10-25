<?php

declare(strict_types=1);

namespace App\Book\Domain\Repository;

use App\Book\Domain\Entity\Book;

interface BookRepositoryInterface
{
    public function save(Book $book): void;
}