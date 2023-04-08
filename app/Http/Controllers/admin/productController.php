<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function __construct() {
        // echo 'Khoi dong product';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "Danh sach";
    }

    /**
     * Show the form for creating a new resource.
     */
    // Hien thi form them san pham, get
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     */

    // Xu li them san pham, POST
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // Lay ra thong tin 1 san pham, GET
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Hien thi form sua, GET
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //Xu li sua san pham
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // Xu li xoa san pham
    public function destroy(string $id)
    {
        //
    }
}
