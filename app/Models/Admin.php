<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Admin extends Model
{
    use HasFactory;

    public function signIn($dataInsert)
    {
        $signIn = DB::select('SELECT * FROM admin WHERE email=? and password=?', $dataInsert);
        return $signIn;
    }

    public function viewAccept()
    {
        $listAll = DB::table('recruitments')->where('isAccept', '2')->paginate(15);
        return $listAll;
    }
    public function viewWait()
    {
        $listAll = DB::table('recruitments')->where('isAccept', '1')->paginate(15);
        return $listAll;
    }
    public function viewReject()
    {
        $listAll = DB::table('recruitments')->where('isAccept', '0')->paginate(15);
        return $listAll;
    }
    public function accept($id)
    {
        DB::update('UPDATE `recruitments` SET isAccept = 2 WHERE `id` = ?', [$id]);
    }
    public function reject($id)
    {
        DB::update('UPDATE `recruitments` SET isAccept = 0 WHERE `id` = ?', [$id]);
    }
    public function listAcc()
    {
        //DB::table()->select('');
    }
}
