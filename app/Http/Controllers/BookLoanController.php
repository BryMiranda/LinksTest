<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookLoanResource;
use App\Models\Book;
use App\Models\BookLoan;
use App\Models\User;
use Illuminate\Http\Request;

class BookLoanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::findOrFail($request->bookId);

        $loanUser = User::find($request->loan_user_id);

        $userRequest = User::find($request->request_user_id);

        $bookLoan = BookLoan::create([
            'book_id' => $book->id,
            'request_at' => $request->request_at,
            'assigned_at' => $request->assigned_at,
            'returned_at' => $request->returned_at,
            'request_user_id' => $request->request_user_id,
            'loan_user_id' => $request->loan_user_id,
            'request_user_name' => $userRequest->id,
            'loan_user_name' => $loanUser->id,
            'copies_number' => $request->copies_number
        ]);

        return BookLoanResource::make($bookLoan);
    }
}
