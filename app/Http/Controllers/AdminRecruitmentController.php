<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminRecruitmentController extends Controller
{
    private $admin;
    public function __construct()
    {

        $this->admin = new Admin();
    }
    public function viewAccept()
    {
        $listAll = $this->admin->viewAccept();
        return view('ad.manage-recruitments-accept')->with(compact('listAll'));
    }

    public function viewWait()
    {
        $listAll = $this->admin->viewWait();
        return view('ad.manage-recruitments-wait')->with(compact('listAll'));
    }

    public function viewReject()
    {
        $listAll = $this->admin->viewReject();
        return view('ad.manage-recuitments-reject')->with(compact('listAll'));
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
}
