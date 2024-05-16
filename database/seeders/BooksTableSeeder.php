<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Functions\Helper;

class BooksTableSeeder extends Seeder
{

    public function run(): void
    {
        $books = config('comics');
        foreach($books as $book){
            $new_book = new Book();
            $new_book->title = $book['title'];
            $new_book->slug = Helper::generateSlug($new_book->title, new Book());
            $new_book->description = $book['description'];
            $new_book->thumb = $book['thumb'];
            $new_book->price = $book['price'];
            $new_book->series = $book['series'];
            $new_book->sale_date = $book['sale_date'];
            $new_book->type = $book['title'];
            $new_book->artists = json_encode($book['artists']);
            $new_book->writers = json_encode($book['writers']);

            $new_book->save();
        }

    }
}
