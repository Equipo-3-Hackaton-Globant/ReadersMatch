<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::all();

        return (view('home', compact("books")));
    }

    public function search(Request $request)
    {
        $search = '%'.$request->search.'%';

        if (!$request->search)
        {
            return (Redirect::to(route("index")));
        }
        $books = Book::whereLike("author", $search)
            ->orWhereLike("title", $search);
        return (view("search", compact("books")));
    }

    public function show(string $id)
    {
        $book = Book::find($id);

        return view("bookdetails", compact("book"));
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            "title" => $request->title,
            "author" => $request-> author,
            "publisher" => $request -> publisher,
            "observation" => $request -> observation,
            "format" => $request -> format,
            "imgURL" => $request -> imgURL
        ]);

        return ($book);
    }

    public function edit(Request $request, string $id)
    {
        $book = Book::find($id);

        if ($request->method() === "POST") {
            $this->update($request, $book);
            return (Redirect::to(route("books")));
        }
        return (view("user.books.booksEdit", compact("books")));
    }
}