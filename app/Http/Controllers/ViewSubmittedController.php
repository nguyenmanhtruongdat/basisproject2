<?php

namespace App\Http\Controllers;

use App\Models\Submitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ViewSubmittedController extends Controller
{
    private $submitted;
    public function __construct()
    {

        $this->submitted = new Submitted();
    }
    public function index(Request $request)
    {
        if (session()->has('sessionAccount')) {
            $id = Session::get('sessionAccount')[0]->id;
            $listAllSubmitteds = $this->submitted->listAll($id);
           //dd($listAllSubmitteds);

            return view('ap.submitted')->with(compact('listAllSubmitteds'));
        } else {
            return redirect()->route('ap.signin')->with('msg', 'Bạn phải đăng nhập trước khi sử dụng chức năng này');
        }
    }

    public function delete($id)
    {
        $this->submitted->deleteSubmitted($id);
        return back();
    }

    public function edit(Request $request)
    {
        $dataInsert = [
            $request->edu,
            $request->exp,
            $request->skill,
            $request->obj,
            $request->id,
        ];

        $this->submitted->editSubmitted($dataInsert);
        return back();
    }
}
