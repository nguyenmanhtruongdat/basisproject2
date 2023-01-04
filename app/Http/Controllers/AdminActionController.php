<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminActionController extends Controller
{
    private $admin;
    public function __construct()
    {

        $this->admin = new Admin();
    }
    public function signIn($request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'email.required' => 'Vui lòng nhập email',
        ]);
    }
    public function viewAccept()
    {
        if (session()->has('sessionAd')) {

            $listAll = $this->admin->viewAccept();
            return view('ad.manage-recruitments-accept')->with(compact('listAll'));
        } else {
            return view('ad.signin');
        }
    }

    public function viewWait()
    {

        if (session()->has('sessionAd')) {
            $listAll = $this->admin->viewWait();
            return view('ad.manage-recruitments-wait')->with(compact('listAll'));
        } else {
            return view('ad.signin');
        }
    }

    public function viewReject()
    {

        if (session()->has('sessionAd')) {
            $listAll = $this->admin->viewReject();
            return view('ad.manage-recuitments-reject')->with(compact('listAll'));
        } else {
            return view('ad.signin');
        }
    }

    public function accept($id)
    {
        $this->admin->accept($id);

        return back();
    }
    public function reject($id)
    {
        $this->admin->reject($id);
        return back();
    }
    public function listAcc()
    {
        $this->admin->listAcc();
    }
}
