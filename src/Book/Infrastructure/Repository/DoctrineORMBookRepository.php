<?php

declare(strict_types=1);

namespace App\Book\Infrastructure\Repository;

use App\Book\Domain\Entity\Book;
use App\Book\Domain\Repository\BookRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

final class DoctrineORMBookRepository implements BookRepositoryInterface
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {
    }

    public function save(Book $book): void
    {
        $this->entityManager->persist($book);
        $this->entityManager->flush();
    }

    public function remove(string $id): void
    {
        $book = $this->entityManager->getRepository(Book::class)->find($id);
        $this->entityManager->remove($book);
        $this->entityManager->flush();
    }
}