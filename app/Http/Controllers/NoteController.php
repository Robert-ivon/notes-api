<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'List of notes']);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Note created']);
    }

    public function show($id)
    {
        return response()->json(['message' => "Showing note with ID $id"]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Updated note with ID $id"]);
    }

    public function destroy($id)
    {
        return response()->json(['message' => "Deleted note with ID $id"]);
    }
}
