<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct() {
        // echo 'Khoi dong DashBoard';
    }
   

    public function index() {
        return '<h2>Dashboard</h2>';
    }
}
