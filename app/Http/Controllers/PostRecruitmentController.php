<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class PostRecruitmentController extends Controller
{
    //
    private $recruitment;
    public function __construct(){
        $this->recruitment = new Recruitment();
    }

    public function viewPostRecruitment(){
        if(session()->has('emailSessionBs')){
            return view('bs.create-new-job');
        }
        else{
            return redirect()->route('bs.signin')->with('msg', 'Bạn phải đăng nhập trước khi đăng tin');
        }
    }

    public function postRecruitment(Request $request){
            $request->validate([
                'name' => 'required',
                'position' => 'required',
    
                'title' => 'required',
    
                'wage' => 'required|numeric',
    
                'detail' => 'required',
                'require' => 'required',
                'benefit' => 'required',
                'image' => 'required',

                // 'email' => 'required|unique:businesses',
                // 'phonePersonal' => 'required|regex:/(0)[0-9]{9}/',
                // 'phoneBusiness' => 'required|regex:/(0)[0-9]{9}/',
    
            ],[
                'name.required' => 'Vui long nhập tên chiến dịch tuyển dụng',
                'position.required' => 'Vui lòng nhập vị trí tuyển dung',
                'title.required' => 'Vui lòng nhập tiêu đề',
                'wage.required' => 'Vui lòng nhập số lương',
                'wage.numeric' => 'Sai định dạng',
                'detail.required' => 'Vui lòng mô tả công việc',
                'require.required' => 'Vui lòng nhập yêu cầu ứng viên',
                'benefit.required' => 'Vui long nhập quyền lợi ứng viên',
                'image.required' => 'Vui long chọn logo',
                

        
            ]);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_name = $file->getClientOriginalName();
                $file->move(public_path('img/logo'), $file_name);
            }
    
            $dataInsert = [ 
                session()->get('emailSessionBs'),
                session()->get('nameSessionBs'),  
                $request->name,
                $request->position,
                $request->area,
                $request->title,
                $request->major,
                $request->type,
                $request->gender,
                $request->rank,
                $request->exp,
                $request->currency,
                $request->wage,
                $request->detail,
                $request->require,
                $request->benefit,
                '1',
                $file_name,
            ];
    
            $this->recruitment->post($dataInsert);
            return redirect()->route('bs.postRecruitment')->with('msg', 'Đăng tin thành công');
            
            dd($request->all());
    }

}
