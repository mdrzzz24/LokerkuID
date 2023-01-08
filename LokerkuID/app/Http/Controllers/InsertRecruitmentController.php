<?php

namespace App\Http\Controllers;

use App\Models\Jobrecruitment;
use Illuminate\Http\Request;

class InsertRecruitmentController extends Controller
{
    public function insertrecruitment()
    {
        return view('company.Recruitment');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Jobrecruitment::create($request->except(['_token','save']));
        return redirect('/company/home');
    }
}
