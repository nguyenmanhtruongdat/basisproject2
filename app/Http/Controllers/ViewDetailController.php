<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewDetailController extends Controller
{
    private $recruitment;
    private $business;
    public function __construct()
    {

        $this->recruitment = new Recruitment();
        $this->business = new Business();
    }

    public function index($id)
    {
        if (session()->has('sessionAccount')) {
            $detail = $this->recruitment->getDetail($id);

            $detailbusiness = $this->business->getBusinessByEmail($detail[0]->email);

            return view('ap.detail-job')->with(compact('detail', 'detailbusiness'));
        } else {
            return redirect()->route('ap.signin')->with('msg', 'Bạn phải đăng nhập trước khi ứng tuyển');
        }
    }
    public function company($id)
    {
        //$email = DB::table('businesses')->select('email')->where('id', '$id')->get('email');
        $detail = $this->business->getDetail($id);
        //dd($email);
        // $detailrecruitment = $this->recruitment->getRecruitmentByEmail($email);
       $email = session()->get('emailSessionBs');
        $detailrecruitment = $this->recruitment->getRecruitmentByEmail($email);

        return view('ap.detail-company')->with(compact('detail', 'detailrecruitment'));
    }
}
