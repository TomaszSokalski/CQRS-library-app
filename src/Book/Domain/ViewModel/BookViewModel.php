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
        private readonly \DateTimeInterface $publicationDate
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

    public function publicationDate(): \DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function data(): array
    {
        return [
            'id' => $this->id(),
            'title' => $this->title(),
            'author' => $this->author(),
            'status' => $this->status(),
            'publicationDate' => $this->publicationDate()->format('Y-m-d'),
        ];
    }
}