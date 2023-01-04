<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveJobController extends Controller
{
    public function index(){
        $jobsave =  DB::table('favoritesjob')->paginate(15);
        
        return view('ap.favorites-job')->with(compact('jobsave'));
    }
}
