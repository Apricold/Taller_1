<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
class PositionController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users=Position::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new Position();
        $user->department_id =$request->department_id;
        $user->name =$request->name;
        $user->hourly_rate =$request->hourly_rate;
        $user->save();

        return response()->json("El dept ha sido creado exitosamente",201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Position::find($id);
        $user->department_id =$request->department_id;
        $user->name =$request->name;
        $user->hourly_rate =$request->hourly_rate;
        $user->save();

    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=Position::find($id);
        $user->delete();
    }

}
