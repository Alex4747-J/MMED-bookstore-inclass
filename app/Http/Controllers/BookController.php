<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        //return book:all();
        //return book:all()->toArray();
        //return json_encode(book:all()->toArray());
        //return book:all()->toJson();

        $books= Book::all()->toArray();
        return json_encode($books);
    }

    //Dependency Injection: Laravel will automatically inject the $id parameter from the route into this method
    public function show(Book $book)
    {
        // dd($book);
    //    $book = Book::find($id);
       return $book;
       
    }
}
