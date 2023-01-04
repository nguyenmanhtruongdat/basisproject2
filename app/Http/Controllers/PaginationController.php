<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Recruitment;

class PaginationController extends Controller
{
    private $recruitment;
    public function __construct()
    {

        $this->recruitment = new Recruitment();
    }
    public function index()
    {

        $listAll =  DB::table('recruitments')->where('isAccept', '2')->paginate(15);

//        $listAll =  DB::table('recruitments')->join('businesses', 'businesses.email', '=', 'recruitments.email')->select('businesses.image')->where('isAccept', '2')->paginate(15);
        //$img = DB::table('businesses')->join('recruitments', 'businesses.email', '=', 'recruitments.email')->select('businesses.image')->get();
        return view('ap.pagination')->with(compact('listAll'));
    }
}
