<?php

namespace App\Http\Controllers;

use App\Models\Submitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubmittedController extends Controller
{

    private $submitted;
    public function __construct()
    {
        $this->submitted = new Submitted();
    }

    public function index(Request $request){
        $array = $this->submitted->validate(Session::get('sessionAccount')[0]->id,$request->jobid);
        if(empty($array)){

            $dataInsert = [
                $request->jobid,
                Session::get('sessionAccount')[0]->id,
                $request->businessid,
                $request->edu,
                $request->exp,
                $request->skill,
                $request->obj,
                '1',
            ];
    
    
    
    
            $this->submitted->submittedApplicant($dataInsert);
            
            return redirect()->back()->with('alertSuccess','Ứng tuyển thành công');
        }
        else{
            return redirect()->back()->with('alertSuccess','Bạn đã ứng tuyển tin này rồi');
        }
        
        

        
        // return redirect()->route('/ap.detail-job')->with('msg', 'Đăng ký thành công');
        // dd($request->all());
        // var_dump($dataInsert);
    }
}
