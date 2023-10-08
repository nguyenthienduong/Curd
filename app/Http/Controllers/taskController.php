<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    function index()
    {
        $data = Task::all();
        return response()->json($data);
    }
    function add(Request $request)
    {
        $data = Task::create($request->all());
        return response()->json($data, 201);
    }
    function update(Request $request, $id)
    {
        $data = Task::findOrFail($id);
        $data->update($request->all());

        return response()->json($data, 200);
    }
    function destroy($id){
        Task::destroy($id);
        return response()->json(null, 204);
    }
}
