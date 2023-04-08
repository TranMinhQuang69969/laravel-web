<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index() {
       
        $user = new Users();
        $userList = $user->getAllUser();
        return (view('layout.admin', compact('userList')) );
        // dd($userList);
    }

    public function remove($id) {

        $user = new Users();
        $del = $user->removeUser($id);

        return (redirect(route('admin.user')));

        // dd($userList);
    } 

   
   


    public function showFormUpdate(Request $request) {
    }

    public function handleUpdateUser(Request $request) {
        $id = $request->session()->get('id');
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['sdt'];
        $password = $request['diachi'];
        $user =  new Users();

        $user->updateUser($id, $name, $email, $phone, $password);
        
        //phải return về route 
        return(redirect(route('profile')));
        // return view('layout.profile');
        // return $id;
    }

    
}
