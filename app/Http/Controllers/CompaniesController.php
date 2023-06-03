<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostCompanyRequest;
use App\Models\Company;
use App\Models\JobHistory;
use App\Models\People;
use App\Models\Positions;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function createCompany()
    {
        return view('company.create_company');
    }

    public function saveCompany(CreatePostCompanyRequest $request)
    {
        Company::create($request->all());
        return  redirect()->route('companies.view');
    }

    public function listAll()
    {
        $company = Company::with('Positions')->get();
        return view('company.companies_view',['companies'=>$company]);
    }

    public function contractForm($company)
    {
        $company = Company::find($company);
        $positions = $company->Positions()->available()->get();
        $peoples = People::all();
        return view('company.create_contract',['positions'=>$positions, 'peoples'=>$peoples]);
    }

    public function saveContract(Request $request)
    {
        JobHistory::create($request->all());
        return redirect()->route('contracts.view');
    }

    public function listContract()
    {
        $jobHistories = JobHistory::all();
        return view ('company.job_history_view', ['jobHistories'=>$jobHistories]);
    }

    public function endContract(Request $request, $jobHistoryId)
    {
        $objJobHistory = JobHistory::find($jobHistoryId);
        $objJobHistory->end_contract = new \DateTime();
        $objJobHistory->save();
        return redirect()->route('contracts.view');
    }
}
