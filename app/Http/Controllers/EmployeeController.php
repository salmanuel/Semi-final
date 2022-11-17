<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::orderBy('lname')->get();

        return view('employees.index',[
            'employees' => $employees
        ]);
    }

    public function store(Request $request) {
        Employee::create([
            'lname' => $request->lname,
            'fname' => $request->fname,
            'position' => $request->position,
            'salary' => $request->salary,
        ]);

        return redirect('/employees');
    }
    
    public function edit(Employee $employees) {

        return view('employees.edit', [
            'employees' => $employees
        ]);
    }

    public function update(Request $request, $employees){
        $input = $request->all();
        $employees = Employee::find($employees);
        $employees->lname=$input['lname'];
        $employees->fname=$input['fname'];
        $employees->position=$input['position'];
        $employees->salary=$input['salary'];



        $employees->save();
        return redirect('/employees');
    }

    public function delete(Employee $employees) {

        return view('employees.delete', [
            'employees' => $employees
        ]);
    }

    public function destroy($employees){
        Employee::find($employees)->delete();
        return redirect('/employees');
    }

}
