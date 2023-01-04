<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Applicants;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Recruitment;
class SignInController extends Controller
{
    //
    private $ap, $bs, $ad;
    public function __construct()
    {
        $this->ap = new Applicants();
        $this->bs = new Business();
        $this->ad = new Admin();
        $this->re = new Recruitment();
    }

    public function signInAp(Request $request)
    {
        $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
        ], [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required' => 'Vui lòng nhập email',
            'email.regex' => 'Vui lòng nhập đúng định dạng email'
        ]);
        // $dataInsert = [
        //     $request->email,
        //     $request->password,
        // ];
        $sessionAcccount = DB::table('applicants')->where('email', $request->email)->first();
        if (!empty($sessionAcccount)) {
                    if (Hash::check($request->password, $sessionAcccount->password)) {
            session()->push('sessionAccount', $sessionAcccount);
            return redirect()->route('ap.index');
        } else {
            return redirect()->route('ap.signin')->with('msg', 'Sai mật khẩu')->withInput();
        }
        }else{
            return redirect()->route('ap.signin')->with('msg', 'Tài khoản không tồn tại')->withInput();

        }





        // if (!empty($this->ap->signIn($dataInsert))) {
        //     $sessionAcccount = $this->ap->signIn($dataInsert)[0];

        //     session()->push('sessionAccount', $sessionAcccount);
        //     return redirect()->route('ap.index');
        // } else {
        //     return redirect()->route('ap.signin')->with('msg', 'Sai mật khẩu');
        // }

        // dd($this->ap->signIn($dataInsert));
    }

    public function signInBs(Request $request)
    {
        $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required',
        ], [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required' => 'Vui lòng email',
            'email.regex' => 'Vui lòng nhập đúng định dạng email'
        ]);


        $dataInsert = [
            $request->email,
            $request->password,
        ];
        # code...

        $sessionAcccount = DB::table('businesses')->where('email', $request->email)->first();
        if (!empty($sessionAcccount)) {
            
            if (Hash::check($request->password, $sessionAcccount->password)) {
                session()->put('nameSessionBs', $sessionAcccount->nameBusiness);
                session()->put('emailSessionBs', $request->email);
                return redirect()->route('bs.index')->with('msg', $request->email);
            } else {
                return redirect()->route('bs.signin')->with('msg', 'Sai mật khẩu')->withInput($request->except('password'));;
                dd($request->all());
            }
        }else{
            return redirect()->route('bs.signin')->with('msg', 'Tài khoản không tồn tại')->withInput($request->except('password'));;

        }



        // if (!empty($this->bs->signIn($dataInsert))) {
        //     $nameSessionAcccountBs = $this->bs->signIn($dataInsert)[0]->nameBusiness;

        //     session()->put('nameSessionBs', $nameSessionAcccountBs);
        //     session()->put('emailSessionBs', $request->email);

        //     return redirect()->route('bs.index')->with('msg', $request->email);
        // } else {
        //     return redirect()->route('bs.signin')->with('msg', 'Sai mật khẩu');

        //     dd($request->all());
        // }
    }

    public function viewSignInAdOrIndex(Request $request)
    {

       if(session()->has('sessionAd')){            
            return view('ad.index');
        }
       else{
            return view('ad.signin');
       }

    }


    public function signInAd(Request $request)
    {
        $dataInsert = [
            $request->email,
            $request->password,
        ];

        if (!empty($this->ad->signIn($dataInsert))) {
            session()->put('sessionAd', $request->email);
            $countAp = $this->ap->count();
            $countBs = $this->bs->count();
            $countRe = $this->re->count();
            // $count = [$countAp, $countBs, $countRe];
            session()->put('countAp', $countAp);
            session()->put('countBs', $countBs);
            session()->put('countRe', $countRe);
            return redirect()->route('ad.index')->with('msg', $request->email);
        } else {
            return redirect()->route('ad.index')->with('msg', 'Sai mật khẩu');

            dd($request->all());
        }
    }
}
