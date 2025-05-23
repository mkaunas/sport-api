<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SportController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Sport::query();

        if ($request->has('type')) {
            $query->where('type', $request->type);
        }
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }
        if ($request->has('city')) {
            $query->where('city', $request->city);
        }
        if ($request->has('date')) {
            $query->where('date', $request->date);
        }

        return response()->json($query->get());
    }

    public function show(Sport $sport): Sport
    {
        return response()->json($sport);
    }
}
