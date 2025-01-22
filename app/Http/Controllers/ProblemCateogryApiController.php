<?php

namespace App\Http\Controllers;

use App\Models\ProblemCategory;
use Illuminate\Http\Request;

class ProblemCateogryApiController extends Controller
{
    // to store the problem categories:
    public function store(Request $request){
        $problem = new ProblemCategory();
        $problem->name = $request->name;
        $problem->description = $request->description;
        $problem->save();

        return response()->json(['data' => $problem, 'success' => true, 'msg' => 'Problem Category added successfully']);
    }

    

}
