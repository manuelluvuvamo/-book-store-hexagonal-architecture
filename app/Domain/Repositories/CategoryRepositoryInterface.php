<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Category;

interface CategoryRepositoryInterface
{
    public function all(): object;
}
