<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller {

    public function getAll() {
        return response()->json(Author::all());
    }

    public function getOne($id) {
        return response()->json(Author::findOrFail($id));
    }

    public function create(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            //'email' => 'required|email|unique:users'
        ]);
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request) {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id) {
        $author = Author::findOrFail($id);
        $isDeleted = $author->delete();
        return $isDeleted 
            ? response()->json('Deleted Successfully', 200)
            : response()->json('The item could not be deleted', 500);
    }
}