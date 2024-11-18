<?php

namespace App\Domain\Entities;

class Book implements \JsonSerializable
{
    private string $title;
    private string $author;
    private string $description;
    private int $categoryId;

    public function __construct(string $title, string $author, string $description, int $categoryId)
    {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->categoryId = $categoryId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function jsonSerialize(): array
    {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'description' => $this->description,
            'category_id' => $this->categoryId,
        ];
    }
}
