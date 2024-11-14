<?php

namespace App\Infrastructure\Repositories\ExternalBD1;

use App\Domain\Entities\Category;
use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Infrastructure\Models\CategoryExternalBD1;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all(): array
    {
        return CategoryExternalBD1::all()->map(fn($model) => new Category($model->category_name))->toArray();
    }
}
