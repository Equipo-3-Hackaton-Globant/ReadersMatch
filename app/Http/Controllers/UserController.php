<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $user = Auth::user();

        return (view("profile", compact("user")));
    }

    public function store(Request $request, User $user)
    {
        $book = Book::create([
            "user_id" => $user->id,
            "title" => $request->title,
            "author" => $request->author,
            "publisher" => $user->name,
            "observation" => $request->observation,
            "format" => $request->format,
            "imgURL" => $request->imgURL
        ]);

        return ($book);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if($request->method() == "POST")
        {
            $this->store($request, $user);
            return (Redirect::to(route("user")));
        }
        return (view("booksCreate", compact("user")));
    }

    public function update(Request $request, Book $book, User $user)
    {
        $book->update([
            "user_id" => $user->id,
            "title" => $request->title,
            "author" => $request->author,
            "publisher" => $user->name,
            "observation" => $request->observation,
            "format" => $request->format,
            "imgURL" => $request->imgURL
        ]);

        return ($book);
    }

    public function edit(Request $request, string $id)
    {
        $book = Book::find($id);
        $user = Auth::user();

        if ($request->method() === "POST")
        {
            $this->update($request, $book, $user);
            return (Redirect::to(route("user")));
        }
        return (view("booksEdit", compact("book", "user")));
    }

    public function destroy(string $id)
    {
        Book::find($id)->delete();
        Redirect::to(route("user"));
    }
}
