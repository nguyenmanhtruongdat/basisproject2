<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends Controller
{
    //

    public function signOutAp(Request $request){

        $request->session()->forget('sessionAccount');
        return redirect()->route('ap.index');
    }
    public function signOutBs(Request $request){

        $request->session()->forget('nameSessionBs');
        $request->session()->forget('emailSessionBs');
        
        return redirect()->route('bs.index');
    }
    public function signOutAd(Request $request){

        $request->session()->forget('sessionAd');
        $request->session()->forget('countAp');
        $request->session()->forget('countBs');
        $request->session()->forget('countRe');
        
        return redirect()->route('ad.index');
    }
}
