<?php

declare(strict_types=1);

namespace App\Book\Infrastructure\Repository;

use App\Book\Application\Query\BookQueryInterface;
use App\Book\Domain\ViewModel\BookCollectionViewModel;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;

final class DoctrineDBALBookRepository implements BookQueryInterface
{
    public function __construct(
        private readonly Connection $connection
    ) {
    }

    /**
     * @throws Exception
     */
    public function getAll(): BookCollectionViewModel
    {
        $qb = $this->connection->prepare('SELECT * FROM book');
        $books = $qb->executeQuery()->fetchAllAssociative();

        return new BookCollectionViewModel($books);
    }
}