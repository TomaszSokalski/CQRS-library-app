<?php

declare(strict_types=1);

namespace App\Book\Application\Query\GetBookById;

use App\Book\Application\Query\BookQueryInterface;
use App\Book\Domain\ViewModel\BookViewModel;
use App\Shared\Domain\Bus\Query\QueryHandler;

final class GetBookByIdQueryHandler implements QueryHandler
{
    public function __construct(
        private readonly BookQueryInterface $bookRepository,
    ) {
    }

    public function __invoke(GetBookByIdQuery $query): BookViewModel
    {
        $book = $this->bookRepository->findById($query->getId());
        return new BookViewModel($book->id(), $book->title(), $book->author(), $book->status(), $book->publicationDate());
    }
}