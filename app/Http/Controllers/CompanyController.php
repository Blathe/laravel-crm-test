<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Handles displaying all companies.
     */
    public function index() {
        $companies = Company::with('employees')->paginate(10);

        return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Handles showing the create page for Companies.
     */
    public function create() {

        return view('companies.create');
    }

    /**
     * Handles saving a company in the database.
     */
    public function store(StoreCompanyRequest $request): RedirectResponse {

        $validated = $request->validated();
        Company::create($validated);

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    /**
     * Handles displaying information for one company.
     */
    public function show($id) {

    }

    /**
     * Handles showing the edit form for a company
     */
    public function edit($id) {

    }

    /**
     * Handles updating the company in the database.
     */
    public function update(Request $request, $id) {

    }

    /**
     * Handles deleting a single company.
     */
    public function destroy($id)
    {

    }
}
