<?php

declare(strict_types=1);

namespace App\Book\Application\Query;

use App\Book\Domain\ViewModel\BookCollectionViewModel;

interface BookQueryInterface
{
    public function getAll(): BookCollectionViewModel;
}