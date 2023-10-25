<?php

namespace App\Book\Application\Command\Create;

use App\Book\Domain\Entity\Book;
use App\Book\Domain\Entity\BookStatus;
use App\Book\Domain\Repository\BookRepositoryInterface;
use App\Shared\Application\IdGeneratorInterface;
use App\Shared\Domain\Bus\Command\CommandHandler;

final class BookCreateCommandHandler implements CommandHandler
{
    public function __construct(
        private readonly BookRepositoryInterface $bookRepository,
        private readonly IdGeneratorInterface $idGenerator
    ) {
    }

    /**
     * @throws \Exception
     */
    public function __invoke(BookCreateCommand $command): void
    {
        $book = new Book(
            $this->idGenerator->generate(),
            $command->getTitle(),
            $command->getAuthor(),
            BookStatus::AVAILABLE,
            $command->getPublicationDate());

        $this->bookRepository->save($book);
    }
}