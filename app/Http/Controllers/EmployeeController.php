<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index() {
        $employees = Employee::with('company')->paginate(10);
        $company_count = Company::all()->count();

        return view('employees.index', ['employees' => $employees, 'company_count' => $company_count]);
    }

    public function create() {
        $companies = Company::all()->pluck('name', 'id');
        return view('employees.create', ['companies' => $companies]);
    }

    public function store(StoreEmployeeRequest $request) {
        $employee = $request->validated();
        Employee::create($employee);

        return redirect()->route('employees.index')->with('success', 'Employee added successfully');
    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id)
    {

    }
}
