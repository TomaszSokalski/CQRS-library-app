<?php

declare(strict_types=1);

namespace App\Book\Domain\ViewModel;

final class BookViewModel
{
    public function __construct(
        private readonly string $id,
        private readonly string $title,
        private readonly string $author,
        private readonly string $status,
        private readonly \DateTime $publicationDate,
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function author(): string
    {
        return $this->author;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function publicationDate(): \DateTime
    {
        return $this->publicationDate;
    }
}