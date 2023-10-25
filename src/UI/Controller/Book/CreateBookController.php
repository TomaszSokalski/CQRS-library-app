<?php

declare(strict_types=1);

namespace App\UI\Controller\Book;

use App\Book\Application\Command\Create\BookCreateCommand;
use App\UI\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateBookController extends AbstractController
{
    /**
     * @throws \Exception
     */
    public function __invoke(Request $request): Response
    {
        $payload = json_decode($request->getContent(), true);

        $this->dispatch(new BookCreateCommand(
            $payload['title'],
            $payload['author'],
            $payload['status'],
            new \DateTime($payload['publicationDate'])));

        return new Response(null, Response::HTTP_CREATED,);
    }
}