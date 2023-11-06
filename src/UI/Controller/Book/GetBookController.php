<?php

declare(strict_types=1);

namespace App\UI\Controller\Book;

use App\Book\Application\Query\GetBookById\GetBookByIdQuery;
use App\UI\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetBookController extends AbstractController
{
    public function __invoke(string $id): JsonResponse
    {
        $book = $this->handle(new GetBookByIdQuery($id));

        return new JsonResponse(
            $book->data(),
            Response::HTTP_OK,
        );
    }
}