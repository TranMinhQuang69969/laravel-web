<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Users extends Model
{
    use HasFactory;
    public function getAllUser() {
        $user = DB::select('select * from user U inner join thongtinnguoidung T on U.id = T.id where machucnang = 2 ORDER BY U.id ');
        return $user;
    }

    public function removeUser($id) {
        $deleteQuery = DB::delete('delete from user where id = '.$id);
        return $deleteQuery;
    }

    public function getUserByName($name) {
        $query = DB::select("select * from user where ten = '".$name."'");
        return $query;
    }

    public function checkLogin($name, $pass) {
        $query = DB::select("select * from user where ten = '".$name."' and matKhau = '".$pass."'");
        return $query;
    }

    public function addUser($name, $email, $phone, $pass) {
        $query = DB::insert('insert into user (ten, email, sdt, matKhau) values (?, ?, ?, ?)', [$name, $email, $phone, $pass]);
        return $query;
    }

    public function addUserInfo($id, $address, $province) {
        $query = DB::insert('insert into thongtinnguoidung (id, diachi, tinh) values (?, ?, ?)', [$id, $address, $province]);
        return $query;
    }

    public function checkSession($session, $userId) {
        if ($session == $userId) {
            return $session;
        }
        
    }


    public function getUserInfo($id) {
        $query = DB::select('select * from user U inner join thongtinnguoidung T on U.id = T.id inner join province P on T.tinh = P.tentinh where U.id = '.$id);
        return $query;
    }

    public function updateUser($id, $ten, $email, $sdt, $diachi) {
        $query = DB::select("update user U inner join thongtinnguoidung T on U.id = T.id set ten = '".$ten."', email = '".$email."', sdt = '".$sdt."', diachi = '".$diachi."' where U.id = '".$id."'");
        return $query;
    }



    


}
