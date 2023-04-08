<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(Request $request)
    {
        /*
        Nếu là trang danh sách => Hiển thị đòng chữ: Xin chào
         */
        if(($request)->is('categories')){
            echo 'Đây là trang danh sách';
        }
    }

    //hien thi danh sach, Get
    public function index(Request $request)
    {
        //Lay tat ca du lieu
        // $allData = $request->all();
        // echo $request->all()['name'];
        // dd($allData);

        $path = $request->path();
        echo $path;
        return  view('client/categories/list');
    }
    
    //Lay ra 1 muc theo id, get
    public function getCategory($id)
    {
        return 'Chi tiet muc : '.$id;
    }

    //Cap nhat, Post
    public function updateCategory($id)
    {
        return "submit sua ".$id;
    }

    //show form them du lieu, get
    public function addCategory()
    {
        return  view('client/categories/add');
    }

    // them du lieu
    public function handleAddCategory(Request $request)
    {
        // $allData = $request->all();
        // dd($allData);
        // print_r($_POST);
        // return redirect(route('category.add'));
        // return "Submit them danh muc";
        $catedoryName = $request->name;
        dd($catedoryName);
    }

    //Xoa du lieu, phuong thuc delete
    public function deleteCategory()
    {
        return "submit xoa ";
    }

    public function getFile(Request $request) {
        return view('client/categories/file');
    }

    public function handleFile(Request $request) {

        if ($request->hasFile('photos')) {
            $file = $request->photos;
            // $path = $file->path();
            $filename = $file->getClientOriginalName();
            dd($filename);
        } else {
            return 'vui long chin file';
        }
        
    }



}
