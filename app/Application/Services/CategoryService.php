<?php

namespace App\Application\Services;

use App\Domain\Repositories\CategoryRepositoryInterface;

class CategoryService
{
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function listAllCategories(): object
    {
        return $this->categoryRepository->all();
    }
}
