<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index() {
        $employees = Employee::paginate(10);
        $company_count = Company::all()->count();

        return view('employees.index', ['employees' => $employees, 'company_count' => $company_count]);
    }

    public function create() {

    }

    public function store(Request $request) {

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
