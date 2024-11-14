<?php

namespace App\Infrastructure\Repositories\ExternalBD2;

use App\Domain\Entities\Category;
use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Infrastructure\Models\CategoryExternalBD2;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all(): array
    {
        return CategoryExternalBD2::all()->map(fn($model) => new Category($model->CategoryName))->toArray();
    }
}
