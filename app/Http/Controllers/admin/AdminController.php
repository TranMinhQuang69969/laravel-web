<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class AdminController extends Controller
{
    public function index() {
    }

    public function edit(Request $request) {
        $user = new Users();

        return (redirect(route('admin')));
    }

    public function showFormEdit(Request $request) {
        $id = $request->id;
        $user =  new USers();
        $data = $user->getUserInfo($id);
        $thongbao = 'Vui lòng kiểm tra lại thông tin';
        return view('layout.edit', compact('data', 'thongbao'));
    }


    public function handleUpdateUser(Request $request) {
       
        $id = $request['id'];
        $name = $request['ten'];
        $email = $request['email'];
        $phone = $request['sdt'];
        $diachi = $request['diachi'];

        // $rules = [
        //     'username'=> 'required|unique:user|max:30',
        //     'email' => 'required|unique:user',
        //     'phone' => 'required|unique:user|max:11',
        //     'diachi' => 'required'
        // ];

        // $messages = [
        //     'required' => 'Vui lòng điền đầy đủ',
        //     'unique'=> 'Đã tồn tại',
        //     'max'=>'Không được nhiều hơn :max kí tự'
        // ];
        
        // $request->validate($rules, $messages);

        $request->validate([
            'ten' => 'required|unique:user',
            // 'email' => 'required|unique:user',
            // 'sdt' => 'required|unique:user',
        ],[
            'ten.required' => "Bắt buộc phải nhập tên đăng nhập",
            'ten.unique' => "Tên đã được đăng ký",

            // 'email.required' => "Bắt buộc phải nhập email",
            // 'sdt.required' => "Bắt buộc phải nhập số điện thoại",

            // 'email.unique' => "Email đã được đăng ký",
            // 'sdt.unique' => "Số điện thoại đã được đăng ký"
        ]);
        $user =  new Users();

        $user->updateUser($id, $name, $email, $phone, $diachi);
        
        //phải return về route 
        return(redirect(route('admin.user')));
        // return $name.' '.$email.' '.$phone.' '.$diachi.' '.$id;
        // return view('layout.profile');
    }
}
