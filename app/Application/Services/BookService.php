<?php

namespace App\Application\Services;

use App\Domain\Entities\Book;
use App\Domain\Repositories\BookRepositoryInterface;

class BookService
{
    private BookRepositoryInterface $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function addBook($data): bool
    {
        return $this->bookRepository->save($data);
    }

    public function listAllBooks(): object
    {
        return $this->bookRepository->all();
    }
}
