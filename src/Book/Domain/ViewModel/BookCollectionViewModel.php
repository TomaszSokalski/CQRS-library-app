<?php

declare(strict_types=1);

namespace App\Book\Domain\ViewModel;

class BookCollectionViewModel
{
    public function __construct(
        public array $books
    ) {
    }

    public function toArray(): array
    {
        return $this->books;
    }
}