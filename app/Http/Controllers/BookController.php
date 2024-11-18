<?php

namespace App\Http\Controllers;

use App\Application\Services\BookService;
use App\Domain\Entities\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private BookService $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index(){
        $books = $this->bookService->listAllBooks();

        return response()->json($books);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'nullable|string',
            'category_id' => 'nullable|integer'
        ]);

        $book = $this->bookService->addBook($data);

        return response()->json($book, 201);


    }
}
