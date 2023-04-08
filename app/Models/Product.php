<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    public function getAllProduct() {
        $query = DB::select('select * from sanpham');
        return $query;
    }

    public function getProduct($id) {
        $query = DB::select('select * from sanpham where masp = '.$id);
        return $query;
    }

    public function insertProduct($province, $image, $price, $giuong, $mota, $diachi) {
        $query = DB::insert('insert into sanpham (tentinh, image, price, sogiuong, description, address) values (?, ?, ?, ?, ?, ?)', [$province, $image, $price, $giuong, $mota, $diachi]);
        return $query;
    }

    public function getAllProvince() {
        $query = DB::select('select * from province');
        return $query;
    }

    public function getProductFromProvince($province) {
        $query = DB::select('select * from sanpham where tentinh = ?', [$province]);
        return $query;
    }

    public function searchProduct($province, $giuong, $min, $max) {
        if(!empty($province) && !empty($giuong) && !empty($min) && !empty($max) )
            $query = DB::select("select * from sanpham, province where sanpham.tentinh = province.tentinh and province.tentinh like '%".$province."%' and sogiuong = ".$giuong." and price >= ".$min." and price <= ".$max);
        else if(!empty($province) && !empty($giuong) && !empty($max) )
            $query = DB::select("select * from sanpham, province where sanpham.tentinh = province.tentinh and province.tentinh like '%".$_POST['tinh']."%' and sogiuong = ".$_POST['sogiuong']." and price <= ".$_POST['max']);        
        else if(!empty($province) && !empty($giuong) && !empty($min) )
            $query = DB::select("select * from sanpham, province where sanpham.tentinh = province.tentinh and province.tentinh like '%".$_POST['tinh']."%' and sogiuong = ".$_POST['sogiuong']." and price >= ".$_POST['min']);       
        else if(!empty($giuong) && !empty($min) && !empty($max) )
            $query = DB::select("select * from sanpham, province where sanpham.tentinh = province.tentinh and sogiuong = ".$_POST['sogiuong']." and price >= ".$_POST['min']." and price <= ".$_POST['max']);
        // else if(!empty($_POST['sogiuong'])  && !empty($_POST['min']) )
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh and sogiuong = ".$_POST['sogiuong']." and price >= ".$_POST['min'];
        // else if(!empty($_POST['sogiuong'])  && !empty($_POST['max']) )
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh and sogiuong = ".$_POST['sogiuong']." and price <= ".$_POST['max'];
        // else if(!empty($_POST['tinh'])  && !empty($_POST['sogiuong']) )
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh and sogiuong = ".$_POST['sogiuong']." and province.tentinh like '%".$_POST['tinh']."%'";
        // else if(!empty($_POST['sogiuong']) ) 
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh and sogiuong = ".$_POST['sogiuong'];                                                    
        // else if(empty($_POST['tinh']) && !empty($_POST['min']) && !empty($_POST['max']))
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh and price >= ".$_POST['min']." and price <= ".$_POST['max'];
        // else if(empty($_POST['tinh']) && !empty($_POST['min']) && empty($_POST['max']))
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh and price >= ".$_POST['min'];
        // else if(empty($_POST['tinh']) && empty($_POST['min']) && !empty($_POST['max']))
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh and price <= ".$_POST['max'];
        // else if( !empty($_POST['tinh']) && empty($_POST['min']) && empty($_POST['max']))
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh AND province.tentinh like '%".$_POST['tinh']."%'";
        // else if(!empty($_POST['tinh']) && !empty($_POST['min']) && empty($_POST['max']))
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh AND province.tentinh like '%".$_POST['tinh']."%' and price >= ".$_POST['min']."";
        // else if(!empty($_POST['tinh']) && empty($_POST['min']) && !empty($_POST['max']))
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh AND province.tentinh like '%".$_POST['tinh']."%' and price <= ".$_POST['max']."";
        // else if(!empty($_POST['tinh']) && !empty($_POST['min']) && !empty($_POST['max']))
        //     $sql1 = "select * from sanpham, province where sanpham.tentinh = province.tentinh AND province.tentinh like '%".$_POST['tinh']."%' and price >= ".$_POST['min']." and price <= ".$_POST['max']."";               

        // $query = DB::select('select * from sanpham where tentinh = ?', [$province]);
        return $query;
    }


}
