<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Functions\Helper;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_book = new Book();

        $form_data['slug'] = Helper::generateSlug($form_data['title'], new Book());

        $new_book->fill($form_data);

        $new_book->save();

        return redirect()->route('books.show', $new_book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $form_data = $request->all();

        if($form_data['title'] === $book->title){
            $form_data['slug'] = $book->slug;
        }else{
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new Book());
        }

        $book->update($form_data);

        return redirect()->route('books.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('deleted', 'Il libro' . $book->title . 'é stato eliminato correttamente');
    }
}
