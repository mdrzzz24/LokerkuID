<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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
        $data = Article::all();
        return view('admin.articlemanagement',compact(['data']));
    }
    public function deletepost($id)
    {
        $data =Article::find($id);
        $data->destroy($id);
        return redirect('admin/articlemanagement');
    }
}
