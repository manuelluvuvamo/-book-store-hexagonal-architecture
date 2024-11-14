<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\Book;
use App\Domain\Repositories\BookRepositoryInterface;
use App\Infrastructure\Models\Book as BookModel;

class EloquentBookRepository implements BookRepositoryInterface
{
    public function save(Book $book): void
    {
        BookModel::create([
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'description' => $book->getDescription(),
            'category_id' => $book->getCategoryId(),
        ]);
    }

    public function findById(int $id): ?Book
    {
        $bookModel = BookModel::find($id);

        if (!$bookModel) {
            return null;
        }

        return new Book($bookModel->title, $bookModel->author, $bookModel->category_id);
    }
}
