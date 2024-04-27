<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Add there the from page eg. return view('test'); done
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        // Get the data from the request
        $company                        = new Company();
        $company->user_id               = auth()->user()->id;
        $company->name                  = $request->name;
        $company->description           = $request->description;
        $company->industry              = $request->industry;
        $company->website               = $request->website;
        $company->contact               = $request->contact;
        $company->employee_range_from   = $request->employee_range_from;
        $company->employee_range_to     = $request->employee_range_to;
        $company->established_year      = $request->established_year;
        $company->location              = $request->location;

        // return true if everything is correct else return false
       return $company->save() ? true : redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        if (auth()->user()->id == $company->user_id) {
            $company->name                  = $request->name;
            $company->description           = $request->description;
            $company->industry              = $request->industry;
            $company->website               = $request->website;
            $company->contact               = $request->contact;
            $company->employee_range_from   = $request->employee_range_from;
            $company->employee_range_to     = $request->employee_range_to;
            $company->established_year      = $request->established_year;
            $company->location              = $request->location;

            // return true if everything is correct else return false
            return $company->save() ? true : redirect()->back();
        }
        return abort(503);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //delete this company if he/she is the owner
       return $company->user_id == auth()->user->id ? $company->delete() : abort(503);

    }
}
