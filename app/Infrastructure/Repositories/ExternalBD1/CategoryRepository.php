<?php

namespace App\Infrastructure\Repositories\ExternalBD1;

use App\Domain\Entities\Category;
use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Models\CategoryExternalBD1;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all(): object
    {
        return CategoryExternalBD1::all()->map(fn($model) => new Category($model->category_name));
    }
}
