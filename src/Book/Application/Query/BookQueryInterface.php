<?php

declare(strict_types=1);

namespace App\Book\Application\Query;

use App\Book\Domain\ViewModel\BookCollectionViewModel;
use App\Book\Domain\ViewModel\BookViewModel;

interface BookQueryInterface
{
    public function getAll(): BookCollectionViewModel;

    public function findById(string $id): BookViewModel;
}