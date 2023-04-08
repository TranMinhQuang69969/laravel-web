<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Users;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use mysqli;
use mysqli_result;

class HomeController extends Controller
{
    public $data= [];
    public function index(Request $request) {
        // $title = "Vai lon that day";
        // $title2 = "shgahdgqadasdasd;";
        // return view('home', compact('title', 'title2'));
        // $this->data['hi'] = 'sfjhshdfaad';
        // $title = "<h1>hellooooo</h1>";

        // $this->data['arr'] = [
        //     'item 1',
        //     'item 2',
        //     'item 3',
        //     'item 4'
        // ];
        // $this->data['title'] = "Um xi la bum";
        $session = $request->session()->get('id', '0');

        if (!empty($session) && $session != '0') {
            $product = new Product();
            $productList = $product->getAllProduct();
            
            return view('client.home', compact('productList', 'session'));
            // return $session;
        } else if($session == '0'){
            $product = new Product();
            $productList = $product->getAllProduct();
            
            return view('client.home', compact('productList', 'session'));
        }
       
        // dd($productList);
    }



    public function showFormLogin(Request $request) {
        $session = $request->session()->get('id');
        $this->data['errorMessage']= "Vui lòng kiểm tra lại thông tin";

        if(!empty($session) && $session != '0') {
            return view('client.home');
        } else  {
            return view('layout.login', $this->data);
        }

    }
   
    public function handleLogin(Request $request) {
        $user = new Users();
        $username = $request['username'];
        $password = $request['pass'];
        // $this->validate($username, [
        //     $username = 'required|unique:table,column,except,id'
        // ]);

        $request->validate([
            'username' => 'required',
            'pass' => 'required'
        ], [
            'username.required' => "Bắt buộc phải nhập tên đăng nhập",
            'pass.required' => "Bắt buộc phải nhập mật khẩu",
        ]);

        $check = $user->checkLogin($username, $password);
        // dd($check);
        
        if(!empty($check)) {
            foreach($check as $value){}
                if ($value->ten == $username && $value->matKhau == $password && $value->machucnang == 2) {
                    $request->session()->put('id', $value->id);
                    return redirect(route('home'));
                } else if ($value->ten == $username && $value->matKhau == $password && $value->machucnang == 1) {
                    $request->session()->put('id', $value->id);
                    return route('admin.user');
                } 
        } else {
            $thongbao = 'Tên đăng nhập hoặc mật khẩu không đúng';
            return  view('layout.login', compact('thongbao'));
        }

        
            
    }

    public function logOut() {
        // if(Auth::logout()) {
        //     return redirect(route('home'));
        // }
        // $request->session()->forget('key');
        return redirect(route('login'));
    }

    public function showFormRegister() {
        $thongbao = 'Vui lòng kiểm tra lại thông tin';
        return view('layout.register', compact('thongbao'));
    }

    public function handleRegister(UserRequest $request) {
        // return view('layout.login', $this->data);
        // return $request->all();
        $user = new Users();
        $username = $request['ten'];
        $email = $request['email'];
        $phone = $request['sdt'];
        $password = $request['pass'];
        $confirmPass = $request['confirmpass'];

        $request->validate([
            
            // 'ten' => 'required|unique:user|min:2|max:30',
            // 'email' => 'required|unique:user',
            // 'sdt' => 'required|unique:user',
            // 'pass' => 'required',
            // 'confirmpass' => 'required',   

        ],[
            // 'ten.required' => "Bắt buộc phải nhập tên đăng nhập",
            // 'ten.unique' => "Tên đã được đăng ký",
            // 'ten.min' => "Tên phải có ít nhất :min kí tự",
            // 'ten.max' => "Tên không được vượt quá :max kí tự",

        


            // 'email.required' => "Bắt buộc phải nhập email",
            // 'email.unique' => "Email đã được đăng ký",

            // 'sdt.required' => "Bắt buộc phải nhập số điện thoại",
            // 'sdt.unique' => "Số điện thoại đã được đăng ký",


            // 'pass.required' => "Bắt buộc phải nhập mật khẩu",

            // 'confirmpass.required' => "Bắt buộc phải xác nhận mật khẩu",
            

        ]);
        // $check = $user->checkLogin($username, $password);
        if($password == $confirmPass) {
            $insert = $user->addUser($username, $email, $phone, $password);
        
            $data = $user->getUserByName($username);
            foreach ($data as $value);
            $request->session()->put('idTemporary', $value->id);
            // return view('client.home');
            return redirect(route('showFomrAddUserInfo'));
            // return $request->session()->get('idTemporary');
        }
        
    }

    public function showFomrAddUserInfo() {
        return view('layout.addUserInfo');
    }

    public function handleAddUserInfo(Request $request) { 
        $user = new Users();
        if (!empty($request->diachi) && !empty($request->tinh)) {
            $address = $request->diachi;
            $province = $request->tinh;
            $id = $request->session()->get('idTemporary');

            $user->addUserInfo($id, $address, $province);
            return view('layout.login');
            
        } else 
            return 'Vui long dien day du thong tin';
        
    }

    public function getSession(Request $request) {
        // $data = $request->session()->get('id');   
        $data = $request->session()->all();
        return $data;    
    }

    public function unsetSession(Request $request) {
        //Xóa tất cả session hiện có
        $request->session()->flush();
    }

    public function viewProfile(Request $request) {
        $session = $request->session()->get('id');
        if(!empty($session) && $session!='0') {
            $user = new Users();
            $data = $user->getUserInfo($session);

            return view('layout.profile', compact('data'));

            // dd($data);
        } else {
            return redirect(route('login'));
        }
    }
    
    

    // public function setSession(Request $request) {
    //     $request->session()->put('id', 'admin');
    //     // return $session;
    // }




    public function product() {
        $this->data['title'] = "san pham";
        return view('client.product', $this->data);

    }

    public function getProductDetail($id) {
        // return view('client/product/detail', compact('id'));
        return view('client/product/detail', compact('id'));

    }

    public function getAdd() {
        // return view('client/product/detail', compact('id'));
        $this->data['title'] = "them san pham";
        return view('client.add', $this->data);

    }

    public function postAdd(Request $request) {
        // return view('client/product/detail', compact('id'));
        dd($request);
        // return redirect(redirect(route('admin')));
    }
}
