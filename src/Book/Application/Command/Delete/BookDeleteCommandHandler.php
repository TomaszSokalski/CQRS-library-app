<?php

namespace App\Book\Application\Command\Delete;

use App\Book\Domain\Repository\BookRepositoryInterface;
use App\Shared\Domain\Bus\Command\CommandHandler;

final class BookDeleteCommandHandler implements CommandHandler
{
    public function __construct(
        private readonly BookRepositoryInterface $bookRepository
    ) {
    }

    public function __invoke(BookDeleteCommand $command): void
    {
        $this->bookRepository->remove($command->getId());
    }
}