<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = Book::query()
            ->active()
            /* ->searchByAuthor($request->author)
            ->searchByEditorial($request->editorial)
            ->searchByTheme($request->theme) */
            ->paginate(10);

        return BookResource::collection($books);
    }
}
