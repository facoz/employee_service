<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostPeopleRequest;
use App\Models\EducationLevel;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function createPeople(CreatePostPeopleRequest $request)
    {
        People::create($request->all());
        
        return  redirect()->route('employee.view');
    }

    public function formPeople()
    {
        $educationLevels = EducationLevel::all();
        return view('employee.employes_create', ['educationLevels'=>$educationLevels]);
    }

    public function listAll()
    {
        $people = People::all();
        return  view('employee.employees_view', ['peoples'=>$people]);
    }
}
