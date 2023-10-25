<?php

namespace App\Book\Application\Command\Create;

use App\Shared\Domain\Bus\Command\Command;
use Symfony\Component\Validator\Constraints as Assert;

final class BookCreateCommand implements Command
{
    public function __construct(
        #[Assert\NotBlank]
        #[Assert\NotBlank(message: 'Book title is required')]
        private readonly string $title,

        #[Assert\NotBlank]
        #[Assert\NotNull(message: 'Book author is required')]
        private readonly string $author,

        #[Assert\NotNull]
        #[Assert\NotBlank(message: 'Publication date is required')]
        private readonly string $publicationDate,
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

    /**
     * @throws \Exception
     */
    public function getPublicationDate(): \DateTime
    {
        return new \DateTime($this->publicationDate);
    }
}