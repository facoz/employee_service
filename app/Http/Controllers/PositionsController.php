<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    public function listAll()
    {
        $positions = Positions::available()->get();
        return view ('position.positions_view',['positions'=>$positions]);
    }

    public function formPosition()
    {
        $companies = Company::all();
        return view('position.create_position',['companies'=>$companies]);
    }

    public function createPosition(Request $request)
    {
        Positions::create($request->all());
        return redirect()->route('positions.view');
    }
}
