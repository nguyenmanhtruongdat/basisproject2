<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\Business;
use Illuminate\Http\Request;

class ManageAccountController extends Controller
{
    //
    private $ap,$bs;
    public function __construct()
    {
        $this->ap = new Applicants();
        $this->bs = new Business();
    }

    public function index(){
        if(session()->has('sessionAd')){
            $listAp = $this->ap->listAll();
            $listBs = $this->bs->listAll();
            
           
            return view('ad.manage-account')->with(compact('listAp','listBs'));
        }
        else{
            return redirect()->route('ad.index');
        }
    }

    public function deleteAp($id){
        $this->ad->deleteAp($id);
        return back();
    }

    public function deleteBs($id){
        $this->ad->deleteBs($id);
        return back();
    }

}
