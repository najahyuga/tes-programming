<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TestingApi;
use Illuminate\Http\Request;

class TestingApiController extends Controller
{
    public function index()
    {
        $items = TestingApi::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
        ]);

        $item = TestingApi::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = TestingApi::find($id);

        if (!$item) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        return response()->json($item);
    }
}
