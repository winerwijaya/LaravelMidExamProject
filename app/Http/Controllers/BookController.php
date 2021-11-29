<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public static function viewDetail($id){
        $book = Book::Where('id', $id)->first();
        
        return view('book', ['book' => $book , 'categories' => Category::all()]);
    }

}
