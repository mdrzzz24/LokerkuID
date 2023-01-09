<?php

namespace App\Http\Controllers;

use App\Models\Jobrecruitment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usermanagement()
    {
        $data =User::all()->where('level','=',2);
        $com =User::all()->where('level','=',1);
        return view('admin.AdminIndex',compact(['data','com']));

    }
    public function delete($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect('/admin');
        // dd($data);
    }
    public function jobmanagement()
    {
        $data =Jobrecruitment::all();
        return view('admin.jobmanagement',compact('data'));
    }
    public function article()
    {
        return 'article';
    }
    public function deletejob($id)
    {
        $data =Jobrecruitment::find($id);
        $data->delete();
        return redirect('admin/jobmanagement');
    }
}
