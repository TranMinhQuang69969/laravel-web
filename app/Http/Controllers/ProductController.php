<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Users;
use App\Http\Requests\ProductRequest;



class ProductController extends Controller
{
    public function getProduct($id, Request $request) {
        $product = new Product();
        $productItem = $product->getProduct($id);
        return view('layout.sanpham', compact('productItem'));
        // // dd($productItem);
        // return $request->id;
    }

    public function getAllPro() {
      
        $product = new Product();
        $productList = $product->getAllProduct();
        
        return view('layout.adminProduct', compact('productList'));
        // dd($productList);
    }

    public function showFormInsert() {


    }

    public function handleInsert(ProductRequest $request) {

        // $request->validate([
        //     'hinhanh' => 'required',
        //     'mota' => 'required',
        //     'gia' => 'required|min:6',
        //     'diachi' => 'required',
        //     'giuong' => 'required',   
        //     'tinh' => 'required',   
        // ], [
        //     'hinhanh.required' => "Bắt buộc phải chọn hình ảnh",
            

        //     'mota.required' => "Bắt buộc phải nhập mô tả cho sản phẩm",
        //     'gia.required' => "Bắt buộc phải nhập giá sản phẩm",
        //     'gia.min' => "Giá ít nhất phải có :min chữ số",
        //     'diachi.required' => "Bắt buộc phải nhập địa chỉ cho sản phẩm",
        //     'mota.required' => "Bắt buộc phải nhập số giường cho sản phẩm",
        //     'mota.required' => "Bắt buộc phải nhập tỉnh",

        // ]);

        if($request->hasFile('hinhanh') && $request->has('mota')&& $request->has('gia')&& $request->has('diachi')&& $request->has('giuong')&& $request->has('tinh')) {
            $file = $request->hinhanh;
            $mota = $request->mota;
            $gia = $request->gia;

            $diachi = $request->diachi;

            $giuong = $request->giuong;
            $tinh = $request->tinh;
            $filename = $file->getClientOriginalName();

            $product = new Product();
            $product->insertProduct($tinh, $filename, $gia, $giuong, $mota, $diachi);

            return 'asdads';


        }
        // return $filename;
       
    }

    public function getProductFromProvince(Request $request) {
        $province = $request->tentinh;
        $product = new Product();
        $data = $product->getProductFromProvince($province);
        return(view('client.product', compact('data')));
                // return $request->tentinh;

        // return ;       
    }

    public function searchProduct() {

    }

    public function handleSearchProduct(Request $request) {
        $province = $request->tinh;
        $min = $request->min;
        $max = $request->max;
        $sogiuong = $request->sogiuong;

        $product =  new Product();
        
        $data = $product->searchProduct($province, $sogiuong, $min, $max);



        // $data = $product->searchProduct($province, $sogiuong, $min, $max);
        // // dd($data);
        return view('client.search', compact('data'));

        // dd($data);
    }


}
