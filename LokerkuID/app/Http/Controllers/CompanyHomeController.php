<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Jobrecruitment;
use App\Models\Training;
use App\Models\User;
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
    public function article()
    {
        return view('company.Companyarticle');
    }

    public function store(Request $request)
    {
        $data = Article::create($request->except(['_token','save']));
        return redirect('company/articlemanagement');

    }

    public function articlemanagement()
    {
        $data = Article::all()->where('publisher','=',Auth::user()->name);
        return view('company.Companyarticlemanagement',compact(['data']));
    }
    public function deletearticle($id)
    {
        $data = Article::find($id);
        $data->delete();
        return redirect('company/articlemanagement');
    }

    public function profile()
    {
        return view('company.CompanyProfile');
    }
    public function editprofile()
    {
        return view('company.editprofile');
    }
    public function updateprofile($id, Request $request)
    {
        $data =User::find($id);
        $data->update($request->except(['_method','_token','submit']));
        return redirect('company/profile');
    }
    public function changepw()
    {
        return view('company.changepw');
    }

    public function training()
    {
        return view('company.trainingmanagement');
    }
    public function storetraining(Request $request)
    {
        $data = Training::create($request->except(['_token','save']));
        return redirect('company/trainingmanagement');

    }
    public function trainingmanagement()
    {
        $data = Training::all()->where('trainer','=',Auth::user()->name);
        return view('company.trainingmanagement',compact(['data']));
    }
    public function deletetraining($id)
    {
        $data = Training::find($id);
        $data->delete();
        return redirect('company/trainingmanagement');
    }

}
