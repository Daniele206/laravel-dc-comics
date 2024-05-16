<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index(){

        $num_books = Book::count();

        return view('home', compact(('num_books')));
    }

    public function contacts(){
        return view('contacts');
    }
}
