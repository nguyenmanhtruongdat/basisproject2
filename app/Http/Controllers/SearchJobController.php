<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchJobController extends Controller
{
    public function index(Request $request)
    {
        if (session()->has('sessionAccount')) {
            //dd($request->major);
            $position = $request->keyword;
            $major = $request->major;
            $area = $request->area;
            $rank = $request->rank;
            $type = $request->type;
            $wage = $request->wage;
            $exp = $request->exp;

            //dd($major);
            if (!empty($position)) {
                $result = DB::table('recruitments')->where('position', $request->keyword)->orWhere('position', 'like', '%'. $request->keyword . '%')->where('isAccept', '2')->paginate(10);
            } else if (!empty($major)) {
                $result = DB::table('recruitments')->where('major', $request->major)->where('isAccept', '2')->paginate(10);
            } else if (!empty($area)) {
                $result = DB::table('recruitments')->where('area', $request->area)->where('isAccept', '2')->paginate(10);
            } else if (!empty($rank)) {
                $result = DB::table('recruitments')->where('rank', $request->rank)->where('isAccept', '2')->paginate(10);
            } else if (!empty($type)) {
                $result = DB::table('recruitments')->where('type', $request->type)->where('isAccept', '2')->paginate(10);
            } else if (!empty($wage)) {
                $result = DB::table('recruitments')->where('wage', '>=', ($request->wage) - 2000000)->where('wage', '<', $request->wage)->where('isAccept', '2')->paginate(10);
            } else if (!empty($exp)) {
                $result = DB::table('recruitments')->where('exp', $request->exp)->where('isAccept', '2')->paginate(10);
            }
            return view('ap.search-job', compact('result'));
        } else {
            return redirect()->route('ap.signin')->with('msg', 'Bạn phải đăng nhập trước khi sử dụng chức năng này');
        }
    }
}
