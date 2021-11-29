<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public static function viewCategory($id){
        $category = Category::Where('id', $id)->first();

        return view('category', ['books'=> $category->books ,'categories' => Category::all()]);
    }
}
