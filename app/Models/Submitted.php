<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Submitted extends Model
{
    use HasFactory;


    public function validate($appid, $jobid){
        $list = DB::select('SELECT * FROM submitteds WHERE appid = ? and jobid = ?', [$appid, $jobid]);
        return $list;
    }

    public function listAll($id){
        $listAllSubmitteds = DB::table('submitteds')->join('recruitments', 'submitteds.id', '=', 'recruitments.id')->select(
            'submitteds.id',
            'submitteds.jobid',
            'submitteds.appid',
            'submitteds.businessid',
            'submitteds.edu',
            'submitteds.exp',
            'submitteds.skill',
            'submitteds.obj',
            'submitteds.status',
            'recruitments.email',
            'recruitments.nameBusiness',
            'recruitments.name',
            'recruitments.position',
            'recruitments.area',
            'recruitments.title',
            'recruitments.major',
            'recruitments.type',
            'recruitments.gender',
            'recruitments.rank',
            'recruitments.exp as exprequired',
            'recruitments.currency',
            'recruitments.wage',
            'recruitments.detail',
            'recruitments.require',
            'recruitments.benefit'
        )->where('appid', $id)->paginate(10);
        return $listAllSubmitteds;
    }

    public function listAllByJobId1($id){

        $list = DB::table('submitteds')->join('recruitments', 'submitteds.jobid', '=', 'recruitments.id')->join('applicants', 'applicants.id', '=', 'submitteds.appid')->select(
            'submitteds.id',
            'submitteds.jobid',
            'submitteds.appid',
            'submitteds.businessid',
            'applicants.email as emailApp',
            'applicants.name as nameApp',
            'submitteds.edu',
            'submitteds.exp',
            'submitteds.skill',
            'submitteds.obj',
            'submitteds.status',
            'recruitments.email',
            'recruitments.nameBusiness',
            'recruitments.name',
            'recruitments.position',
            'recruitments.area',
            'recruitments.title',
            'recruitments.major',
            'recruitments.gender',
            'recruitments.rank',
            'recruitments.exp AS exprequired',
            'recruitments.currency',
            'recruitments.wage',
            'recruitments.detail',
            'recruitments.require',
            'recruitments.benefit'
        )->where('jobid', $id)->where('recruitments.email', session()->get('emailSessionBs'))->where('status', '1')->paginate(10);
        return $list;
    }

    public function listAllByJobId2($id){
        $list = DB::table('submitteds')->join('recruitments', 'submitteds.jobid', '=', 'recruitments.id')->join('applicants', 'applicants.id', '=', 'submitteds.appid')->select(
            'submitteds.id',
            'submitteds.jobid',
            'submitteds.appid',
            'submitteds.businessid',
            'applicants.email as emailApp',
            'applicants.name as nameApp',
            'submitteds.edu',
            'submitteds.exp',
            'submitteds.skill',
            'submitteds.obj',
            'submitteds.status',
            'recruitments.email',
            'recruitments.nameBusiness',
            'recruitments.name',
            'recruitments.position',
            'recruitments.area',
            'recruitments.title',
            'recruitments.major',
            'recruitments.gender',
            'recruitments.rank',
            'recruitments.exp AS exprequired',
            'recruitments.currency',
            'recruitments.wage',
            'recruitments.detail',
            'recruitments.require',
            'recruitments.benefit'
        )->where('jobid', $id)->where('recruitments.email', session()->get('emailSessionBs'))->where('status', '2')->paginate(10);
        return $list;
    }

    public function submittedApplicant($dataInsert){
        DB::insert('INSERT INTO submitteds (jobid,appid,businessid,edu,exp,skill,obj,status) VALUES (?,?,?,?,?,?,?,?)', $dataInsert);
    }

    
    public function editSubmitted($dataInsert){
        DB::update('UPDATE `submitteds` SET `edu`= ?,`exp` = ? ,skill = ? ,obj = ? WHERE `id` = ?', $dataInsert);
    }

    public function deleteSubmitted($id){
        return DB::delete('DELETE FROM submitteds WHERE `id`=?',[$id]);
    }

    public function setStatusYes($id){
        DB::update('UPDATE `submitteds` SET status = 2 WHERE `id` = ?', [$id]);
    }

    public function setStatusNo($id){
        DB::update('UPDATE `submitteds` SET status = 0 WHERE `id` = ?', [$id]);
    }

    public function getIn4ToMail($id){
        $email = DB::table('submitteds')->join('recruitments', 'submitteds.jobid', '=', 'recruitments.id')->join('applicants', 'applicants.id', '=', 'submitteds.appid')->select(
            'applicants.email',
            'applicants.name',
            'recruitments.position',
            'recruitments.nameBusiness',
            'recruitments.rank',
        )->where('submitteds.id', $id)->get();
        // dd($email);
        return $email;
    }
}
