<?php

namespace App\Http\Controllers;

use App\Application\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(){
        $books = $this->categoryService->listAllCategories();

        return response()->json($books);
    }
}
