<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookRegistryResource;
use App\Models\Book;
use App\Models\BookRegistry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookRegistryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $book = Book::findOrFail($request->book_id);

            $bookRegistry = BookRegistry::create([
                'book_id' => $book->id,
                'copies_quantity' => $request->copies_quantity,
                'type' => $request->type,
                'motive' => $request->motive,
            ]);

            if ($request->type === 'ingress') {
                $book->copies_number = $book->copies_number + $request->copies_quantity;
            }

            if ($request->type === 'egress') {
                $book->copies_number = $book->copies_number - $request->copies_quantity;
            }

            DB::commit();

            return BookRegistryResource::make($bookRegistry);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
