<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function article()
    {
        return view('admin.article');
    }
    public function store(Request $request)
    {
        // dd($request);
        Article::create($request->except(['_token','save']));
        return redirect('admin/articlemanagement');
    }
    public function articlemanagement()
    {
        $data = Article::all()->where('publisher','=',Auth::user()->name);
        $data2 = Article::all();
        return view('admin.articlemanagement',compact(['data','data2']));
    }
    public function deletepost($id)
    {
        $data =Article::find($id);
        $data->destroy($id);
        return redirect('admin/articlemanagement');
    }
}
