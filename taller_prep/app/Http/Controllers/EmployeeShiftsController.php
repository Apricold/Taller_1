<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees_Shifts;

class EmployeeShiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users=Employees_Shifts::all();
        return response()->json($users);
    }


    public function store(Request $request)
    {
        $user=new Employees_Shifts();
        $user->employee_id =$request->employee_id;
        $user->shift_start =$request->shift_start;
        $user->shift_end =$request->shift_end;
        $user->save();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Employees_Shifts::find($id);     
        $user->employee_id =$request->employee_id;
        $user->shift_start =$request->shift_start;
        $user->shift_end =$request->shift_end;
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=Employees_Shifts::find($id);
        $user->delete();
    }
}
