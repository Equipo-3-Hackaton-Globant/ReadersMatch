<?php

namespace app\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $book = Book::create(
            [
                "title" => $request->title,
                "author" => $request-> author,
                "publisher" => $request -> publisher,
                "observation" => $request -> observation,
                "format" => $request -> format,
                "imgURL" => $request -> imgURL
            ]);
        return ($book);
        
    }

    public function create(Request $request){
        if($request-> method() == "POST"){
            $this->store($request);
            return (Redirect::to(route("books")));
        }
        return (view("user.books.booksCreate"));
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

        if ($request->method() === "POST")
        {
            $this->update($request, $book);
            return (Redirect::to(route("books")));
        }
        return (view("user.books.booksEdit", compact("books")));
    }
    
    public function deleteById(string $id)
    {
        Book::find($id)->delete();
    }

    public function index(Request $request)
    {
        $books = book::all();

        if ($request->action == "delete")
        {
            $this->deleteById($request->id);
            return (Redirect::to(route("books")));
        }
        return (view("user.books.books", compact("books")));
    }
}

