<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Book;

interface BookRepositoryInterface
{
    public function save(Book $book): void;
    public function findById(int $id): ?Book;
}
