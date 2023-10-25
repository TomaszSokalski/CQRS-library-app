<?php

declare(strict_types=1);

namespace App\UI\Controller\Book;

use App\Book\Application\Query\GetBooks\GetBooksCollectionQuery;
use App\UI\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetBooksController extends AbstractController
{
    public function __invoke(GetBooksCollectionQuery $query): JsonResponse
    {
        $booksCollection = $this->handle(new GetBooksCollectionQuery());

        return new JsonResponse(
            $booksCollection->toArray(),
            Response::HTTP_OK,
        );
    }
}