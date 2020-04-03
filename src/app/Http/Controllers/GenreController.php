<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller {

    public function getAll() {
        return response()->json(Genre::all());
    }

    public function getOne($id) {
        return response()->json(Genre::findOrFail($id));
    }

    public function create(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $genre = Genre::create($request->all());

        return response()->json($genre, 201);
    }

    public function update($id, Request $request) {
        $genre = Genre::findOrFail($id);
        $genre->update($request->all());

        return response()->json($genre, 200);
    }

    public function delete($id) {
        $genre = Genre::findOrFail($id);
        $isDeleted = $genre->delete();
        return $isDeleted 
            ? response()->json('Deleted Successfully', 200)
            : response()->json('The item could not be deleted', 500);
    }
}