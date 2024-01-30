<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    // CREATE
    public function create(Request $request)
    {
        $data = $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'phone_number'  => 'required',
            'street'        => 'required',
            'city'          => 'required',
            'country'       => 'required',
            // Dodaj walidację dla innych właściwości, jeśli są
        ]);

        $people = People::create($data);

        return response()->json($people, 201);
    }

    // READ all
    public function getAll()
    {
        $people = People::all();

        return response()->json($people, 200);
    }

    // READ
    public function read($id)
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        return response()->json($people, 200);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $data = $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'phone_number'  => 'required',
            'street'        => 'required',
            'city'          => 'required',
            'country'       => 'required',
            // Dodaj walidację dla innych właściwości, jeśli są
        ]);

        $people->update($data);

        return response()->json($people, 200);
    }

    // DELETE
    public function delete($id)
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $people->delete();

        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
