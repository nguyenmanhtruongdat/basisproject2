<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewHomeController extends Controller
{   
    private $recruitment;
    public function __construct(){

        $this->recruitment = new Recruitment(); 
    }
    
    public function index(){

        // $listAll =  DB::table('recruitments')->where('isAccept', '2')->paginate(15);
        $listAll =  DB::table('recruitments')->join('businesses', 'businesses.email', '=', 'recruitments.email')->select('recruitments.id', 'recruitments.email','recruitments.nameBusiness', 'name', 'position', 'area', 'title' ,'major', 'type', 'recruitments.gender', 'rank', 'exp', 'currency','wage', 'detail','require', 'benefit', 'businesses.image' )->where('isAccept', '2')->paginate(15);

        //dd($listAll);
        //$img = DB::table('businesses')->join('recruitments', 'businesses.email', '=', 'recruitments.email')->select('image')->get();
       // dd($img);
        return view('ap.index')->with(compact('listAll'));
    }
}
