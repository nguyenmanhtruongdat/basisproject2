<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Business;
class BusinessController extends Controller
{
    private $business;
    public function __construct()
    {

        $this->business = new Business();
    }
    public function index()
    {
        $listAll = $this->business->listAllCompany();
        return view('ap.company')->with(compact('listAll'));
    }
    public function search( Request $request)
    {
     $listAll = $this->business->search($request->keyword); 
     return view('ap.search-company')->with(compact('listAll'));

    }
}



