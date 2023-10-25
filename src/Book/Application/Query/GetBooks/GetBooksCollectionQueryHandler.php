<?php

declare(strict_types=1);

namespace App\Book\Application\Query\GetBooks;

use App\Book\Application\Query\BookQueryInterface;
use App\Book\Domain\ViewModel\BookCollectionViewModel;
use App\Shared\Domain\Bus\Query\QueryHandler;

final class GetBooksCollectionQueryHandler implements QueryHandler
{
    public function __construct(
        private readonly BookQueryInterface $bookQuery
    ) {
    }

    public function __invoke(GetBooksCollectionQuery $query): BookCollectionViewModel
    {
        return $this->bookQuery->getAll();
    }
}