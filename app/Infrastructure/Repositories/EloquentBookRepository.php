<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\Book;
use App\Domain\Repositories\BookRepositoryInterface;
use App\Models\Book as BookModel;

class EloquentBookRepository implements BookRepositoryInterface
{
    public function save(Book $book): bool
    {
        $created = BookModel::create([
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'description' => $book->getDescription(),
            'category_id' => $book->getCategoryId(),
        ]);

        if($created)
            return true;

        return false;
    }

    public function findById(int $id): ?Book
    {
        $bookModel = BookModel::find($id);

        if (!$bookModel) {
            return null;
        }

        return new Book($bookModel->title, $bookModel->author, $bookModel->desciption, $bookModel->category_id);
    }

    public function all(): object
    {
        return BookModel::all()->map(fn($model) => new Book($model->title, $model->author, $model->description, $model->category_id));
    }
}
