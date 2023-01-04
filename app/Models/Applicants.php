<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Applicants extends Model
{
    use HasFactory;

    // public function getName($dataInsert){
    //     $name = DB::select('SELECT name FROM applicants WHERE email=? and password=?', $dataInsert);
    //     return $name;
    // }

    public function signIn($dataInsert){
        $ap = DB::select('SELECT * FROM applicants WHERE email=? and password=?', $dataInsert);
        return $ap;
    }

    public function signUp($dataInsert){
        DB::insert('INSERT INTO applicants (name,email,password) VALUES (?,?,?)', $dataInsert);

    }

    public function listAll(){
        $listAll = DB::select('SELECT * FROM applicants');
        return $listAll;
    }

    public function editAp($dataInsert){
        DB::update('UPDATE `applicants` SET `name`= ?,`email` = ? ,password = ? WHERE `id` = ?', $dataInsert);
    }

    public function deleteAp($id){
        DB::delete('DELETE FROM applicants WHERE `id`=?',[$id]);
    
    }

    public function count(){
        // $list = DB::select('SELECT * FROM applicants');
        $list = DB::table('applicants')->get();
        return $list->count();
    
    }

}
