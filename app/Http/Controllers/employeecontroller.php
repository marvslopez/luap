<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeemodel;
class employeecontroller extends Controller
{
    public function index()
    {
        return view('employee.index');
    }


    public function store(Request $request){

        employeemodel::create([
            'firstname'=>$request->firstname,
            'middlename'=>$request->middlename,
            'lastname'=>$request->lastname,
            'address'=>$request->address,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'zip'=>$request->zip, 
            'age'=>$request->age,
            'birthdate'=>$request->birthdate,
            'datehired'=>$request->datehired,
            'department'=>$request->department,
            'division'=>$request->division
           ]);
            return redirect('employee');

    }

    public function  show()
    {
        $employee = employeemodel::get();
        return view('employee.show' , compact('employee'));
    }
}
