<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users=Departments::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new Departments();
        $user->name =$request->name;
        $user->save();

        return response()->json("El dept ha sido creado exitosamente",201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Departments::find($id);
        $user->name =$request->name;
        $user->save();

    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=Departments::find($id);
        $user->delete();
    }



}
