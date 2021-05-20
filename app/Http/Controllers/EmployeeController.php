<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

use App\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('list', compact('employees'));
    }
    
    public function create() {
        return view('create');
    }
    
    public function store(EmployeeStoreRequest $request) {
        $employee = Employee::create($request->all());
        return redirect()->route('employees.index');
    }
    
    public function edit(Employee $employee) {
        return view('edit', compact('employees'));
    }
    
    public function update(Request $request, Employee $employee) {
       
        $request->validate([
            "first_name" => 'required | max:255',
            "last_name" => 'required | max:255',
            "email" => 'required | email | max:255',
            "phone_number" => 'required | max:15'
        ]);
                
        $employee->update($request->all());

        return redirect()->route('employees.index');
    } 
    
    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
