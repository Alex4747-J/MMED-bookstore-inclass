<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    /**
     * return a list of books
     *
     * @return array
     */
    public function index(Request $request)
    {
        $authorID = $request->get('author_id', null);
        $authorName = $request->get('author_name', '');
        

        $booksQuery = Book::query(); 
        if ($authorID !== null) {
            //$booksQuery->whereAuthorId($authorID);
            $booksQuery->where('author_id', '=', $authorID);
        }

        if (! empty($authorName)) {
            $booksQuery->whereHas('author', function ($authorQuery) use ($authorName) {
                //$query->whereLike('name', '%something%');
                $authorQuery->where('name', 'LIKE', '%' . $authorName . '%');
            });
        }
        //return book:all();
        //return book:all()->toArray();
        //return json_encode(book:all()->toArray());
        //return book:all()->toJson();

        // $books= Book::all()->toArray();

        $booksQuery->with('author');
        $books = $booksQuery->get();
        return json_encode($books);
    }

    /** This endpoint shoes a specific book
     * @param Book $book The book I want to show
     * @return Book
     * 
     */

    //Dependency Injection: Laravel will automatically inject the $id parameter from the route into this method
    public function show(Book $book)
    {
        //this will load 'author' on 'book'
        //this does a query
        // $author = $book->author;
        //this does not do a query
        // $authorOrder = $book->author;
        // dd($book);
    //    $book = Book::find($id);
        $book->load('author');
       return $book;
       
    }

}