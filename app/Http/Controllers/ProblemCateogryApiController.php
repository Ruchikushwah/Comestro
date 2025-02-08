<?php

namespace App\Http\Controllers;

use App\Models\ProblemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProblemCateogryApiController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['msg' => 'not authorized ']);
        }
        $problem = new ProblemCategory();
        $problem->name = $request->name;
        $problem->description = $request->description;
        $problem->save();

        return response()->json(['data' => $problem, 'success' => true, 'msg' => 'Problem Category added successfully']);
    }

    public function index()
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'not authorized']);
        }
        return response()->json(['data' => ProblemCategory::all()]);
    }

    public function show($id)
    {
        if(!Auth::check()){
            return response()->json(['message' => 'not authorized']);
        }
        $problemCategory = ProblemCategory::findOrFail($id);
        return response()->json(['data' => $problemCategory]);
    }
}
