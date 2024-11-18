<?php

namespace App\Infrastructure\Repositories\ExternalBD2;

use App\Domain\Entities\Category;
use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Models\CategoryExternalBD2;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all(): object
    {
        return CategoryExternalBD2::all()->map(fn($model) => new Category($model->CategoryName));
    }
}
