<?php

namespace App\Http\Controllers;

use App\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller {

    public function getAll() {
        return response()->json(Publisher::all());
    }

    public function getOne($id) {
        return response()->json(Publisher::find($id));
    }

    public function create(Request $request) {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $publisher = Publisher::create($request->all());

        return response()->json($publisher, 201);
    }

    public function update($id, Request $request) {
        $publisher = Publisher::findOrFail($id);
        $publisher->update($request->all());

        return response()->json($publisher, 200);
    }

    public function delete($id) {
        $publisher = Publisher::findOrFail($id);
        $isDeleted = $publisher->delete();
        return $isDeleted 
            ? response()->json('Deleted Successfully', 200)
            : response()->json('Deleted Error', 500);
    }
}