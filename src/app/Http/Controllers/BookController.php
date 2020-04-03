<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use App\Publisher;
use App\Author;
use Illuminate\Http\Request;

class BookController extends Controller {
	
	public function getAll() {
		return response()->json(Book::all());
	}
	
	public function getOne($id) {
		
		$book =  Book::with(['author','publisher','genre'])->find($id);
		
		return response()->json($book);
	}
	
	public function create(Request $request) {
		
		$this->validate($request, [
                'title' => 'required',
                'year' => 'required',
        ]);

        $author = Author::findOrFail($request->author);
        $publisher = Publisher::findOrFail($request->publisher);
        $genre = Genre::findOrFail($request->genre);
        $book = new Book();
        $book->title = $request->title;
        $book->year = $request->year; 
        $book->author()->associate($author);
        $book->genre()->associate($genre);
        $book->publisher()->associate($publisher);
        $book->save();
        return response()->json($book, 201);
    }
    
    public function update($id, Request $request) {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json($book, 200);
    }
    
    public function delete($id) {
        Book::findOrFail($id)->delete();
        return response()->json('Deleted Successfully', 200);
    }
}