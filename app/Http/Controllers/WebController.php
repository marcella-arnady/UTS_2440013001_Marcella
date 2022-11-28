<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\publisher;
use App\Models\category;
use App\Models\book;

class WebController extends Controller
{
    public function home() {
        $books = book::all();
        return view('home', compact('books'));
    }

    public function contact() {
        $data = array('title' => 'Contact Us');
        return view('contact', $data);
    }

    public function publisher() {
        $publishers = publisher::all();
        return view('publisher', compact('publishers'));
        
    }

    public function category() {
        $publishers = category::all();
        return view('category', compact('categories'));
        
    }

    public function book(book $book) {
       return view('book', [
        "book" => $book
       ]);
    }

    public function children() {
        $books = book::all();
        return view('children', compact('books'));
        
    }

    public function middlegrade() {
        $books = book::all();
        return view('middlegrade', compact('books'));
        
    }

    public function fiction() {
        $books = book::all();
        return view('fiction', compact('books'));
        
    }
}
