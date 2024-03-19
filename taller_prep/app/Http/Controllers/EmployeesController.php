<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index(Request $request)
    {
        $users=Employees::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new Employees();
        $user->position_id =$request->position_id;
        $user->name =$request->name;
        $user->lastname =$request->lastname;
        $user->card =$request->card;
        $user->start_date =$request->start_date;
        $user->save();

        return response()->json("El dept ha sido creado exitosamente",201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Employees::find($id);
        $user->position_id =$request->position_id;
        $user->name =$request->name;
        $user->lastname =$request->lastname;
        $user->card =$request->card;
        $user->start_date =$request->start_date;
        $user->save();


    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=Employees::find($id);
        $user->delete();
    }
}
