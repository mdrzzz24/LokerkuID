<?php

namespace App\Http\Controllers;

use App\Models\Jobrecruitment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showjobs(){
        $job = Jobrecruitment::all();
        return view('user.findjob',compact(['job']));
    }
}
