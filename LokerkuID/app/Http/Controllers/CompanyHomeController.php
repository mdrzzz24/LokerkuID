<?php

namespace App\Http\Controllers;
use App\Models\Jobrecruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyHomeController extends Controller
{
    public function editrecruitment(){
        $data = Jobrecruitment::select('*')
        ->where('recruiter', '=',Auth::user()->name)
        ->where('status', '=','ongoing')
        ->get();
        return view('company.CompanyIndex',compact(['data']));
    }
    public function edit($id)
    {
        $data =Jobrecruitment::find($id);
        return view('company.EditRecruitment',compact(['data']));
        dd($data);
    }

    public function update($id, Request $request)
    {
        $data =Jobrecruitment::find($id);
        $data->update($request->except(['_token','submit']));
        return redirect('/company/home');
        // dd($data);
    }

    public function close($id, Request $request)
    {
        $data =Jobrecruitment::find($id);
        $data->update($request->except(['_token','_method','_method','jobname','city','salary','type','remoteworking','desc','submit']));
        return redirect('/company/home');
        // $data =Jobrecruitment::find($id);
        // $data->update($request->except(['_token','submit']));
        // return redirect('/company/home');
        dd($request);
    }

    public function delete($id)
    {
        $data =Jobrecruitment::find($id);
        $data->delete();
        return redirect('/company/home');
    }

    public function history()
    {
        $data = Jobrecruitment::select('*')
        ->where('recruiter', '=',Auth::user()->name)
        ->where('status', '=','close')
        ->get();
        return view('company.history',compact(['data']));
        // return 'dada';

    }
}
