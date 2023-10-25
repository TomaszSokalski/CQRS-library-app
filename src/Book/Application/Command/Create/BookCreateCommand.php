<?php

namespace App\Book\Application\Command\Create;

use App\Shared\Domain\Bus\Command\Command;

final class BookCreateCommand implements Command
{
    public function __construct(
        private readonly string $title,
        private readonly string $author,
        private readonly string $status,
        private readonly \DateTime $publicationDate,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getPublicationDate(): \DateTime
    {
        return $this->publicationDate;
    }
}