<?php

declare(strict_types=1);

namespace App\UI\Controller\Book;

use App\Book\Application\Command\Delete\BookDeleteCommand;
use App\UI\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteBookController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        $command = new BookDeleteCommand($request->get('id'));
        $this->dispatch($command);

        return new Response(
            null,
            Response::HTTP_NO_CONTENT);
    }
}