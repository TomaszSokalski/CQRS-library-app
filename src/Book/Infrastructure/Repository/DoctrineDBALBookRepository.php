<?php

declare(strict_types=1);

namespace App\Book\Infrastructure\Repository;

use App\Book\Application\Query\BookQueryInterface;
use App\Book\Domain\ViewModel\BookCollectionViewModel;
use App\Book\Domain\ViewModel\BookViewModel;
use Doctrine\DBAL\Connection;

final class DoctrineDBALBookRepository implements BookQueryInterface
{
    public function __construct(
        private readonly Connection $connection
    ) {
    }

    /**
     * @throws \Exception
     */
    public function getAll(): BookCollectionViewModel
    {
        $sql = 'SELECT * FROM book';
        $stmt = $this->connection->prepare($sql);
        $books = $stmt->executeQuery()->fetchAllAssociative();

        return new BookCollectionViewModel($books);
    }


    /**
     * @throws \Exception
     */
    public function findById(string $id): BookViewModel
    {
        $sql = 'SELECT id, title, author, status, publication_date FROM book WHERE id = :id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue('id', $id);
        $book = $stmt->executeQuery()->fetchAssociative();
        return new BookViewModel($book['id'], $book['title'], $book['author'], $book['status'], new \DateTime($book['publication_date']));
    }
}