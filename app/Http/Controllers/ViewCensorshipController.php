<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Submitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ViewCensorshipController extends Controller
{
    //private $recruitment;
    private $submitted;
    public function __construct()
    {

        $this->submitted = new Submitted();
    }

    public function viewCensorship($id)
    {
        if (session()->has('emailSessionBs')) {
            $emailBs = session()->get('emailSessionBs');
           $list = $this->submitted->listAllByJobId1($id);
            return view('bs.censorship')->with(compact('list'));
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khidùng chức năng này');
        }
    }

    public function viewCensorshipped($id)
    {
        if (session()->has('emailSessionBs')) {
            $emailBs = session()->get('emailSessionBs');
            $list = $this->submitted->listAllByJobId2($id);
            return view('bs.censorshipped')->with(compact('list'));
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi dùng chức năng này');
        }
    }


    public function censorshipYes($id)
    {
        if (session()->has('emailSessionBs')) {

            $this->submitted->setStatusYes($id);

            $in4 = $this->submitted->getIn4ToMail($id);

            $mailData = [
                'title' => 'Xin chào '.$in4[0]->name,
                'body' => 'Bạn đã được duyệt đơn xin vào vị trí '.$in4[0]->position.', chức vụ '.$in4[0]->rank.' ở '.$in4[0]->nameBusiness.'. Chúng tôi sẽ gửi mail cho bạn thời gian chi tiết để phỏng vấn trực tiếp sau'
            ];
             
            Mail::to($in4[0]->email)->send(new SendMail($mailData));

            return back();
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi dùng chức năng này');
        }
    }
    public function censorshipNo($id)
    {
        if (session()->has('emailSessionBs')) {

            $this->submitted->setStatusNo($id);

            $in4 = $this->submitted->getIn4ToMail($id);

            $mailData = [
                'title' => 'Xin chào '.$in4[0]->name,
                'body' => 'Bạn không được duyệt đơn xin vào vị trí '.$in4[0]->position.', chức vụ '.$in4[0]->rank.' ở '.$in4[0]->nameBusiness
            ];
             
            Mail::to($in4[0]->email)->send(new SendMail($mailData));

            return back();
        } else {
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi sử dụng chức năng này');
        }
    }
}
