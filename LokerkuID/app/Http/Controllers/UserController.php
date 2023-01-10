<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Jobrecruitment;
use App\Models\Training;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showjobs(Request $request){
        if($request->has('search')){
            $job= Jobrecruitment::where('jobname','LIKE','%'.$request->search.'%')->where('status','=','ongoing')->get();
            return view('user.findjob',compact(['job']));
        }elseif($request->has('location')){
            $job= Jobrecruitment::where('city','LIKE','%'.$request->location.'%')->where('status','=','ongoing')->get();
            return view('user.findjob',compact(['job']));
        }elseif($request->has('type')){
            $job= Jobrecruitment::where('type','LIKE','%'.$request->type.'%')->where('status','=','ongoing')->get();
            return view('user.findjob',compact(['job']));
        }elseif($request->has('remote')){
            $job= Jobrecruitment::where('remoteworking','LIKE','%'.$request->remote.'%')->where('status','=','ongoing')->get();
            return view('user.findjob',compact(['job']));
        }elseif($request->has('experience')){
            $job= Jobrecruitment::where('experience','LIKE','%'.$request->experience.'%')->where('status','=','ongoing')->get();
            return view('user.findjob',compact(['job']));
        }else{

            $job = Jobrecruitment::all()->where('status','=','ongoing');
            return view('user.findjob',compact(['job']));
        }

    }

    // public function search(Request $request)
    // {
    //     if($request->has('search')){
    //         return 'wkwk';
    //     }
    // }

    public function show(){
        $job = Jobrecruitment::all()->where('status','=','ongoing');
        return view('user.index',compact(['job']));
    }
    public function training(Request $request){


        $data = Training::where('trainingname','LIKE','%'.$request->search.'%')->get();
        return view('user.training',compact(['data']));
    }
    public function article(Request $request)
    {
        $article = Article::where('title','LIKE','%'.$request->search.'%')->get();
        return view('user.article',compact(['article']));
    }
    public function readarticle($id)
    {
        $data = Article::find($id);
        return view('user.readarticle',compact(['data']));
    }
    public function detail($id)
    {
        $data = Jobrecruitment::find($id);
        return view('user.jobdetail',compact(['data']));
    }
    public function detailtraining($id)
    {
        $data = Training::find($id);
        return $data;
    }

}
