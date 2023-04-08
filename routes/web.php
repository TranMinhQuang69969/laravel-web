<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
// use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/sanpham', [HomeController::class, 'product']);

Route::prefix('/')->group(function(){ 
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('sanpham/{id}', [ProductController::class, 'getProduct']);
    // Route::get('favourite/{id}', [UserController::class, '']);
    Route::get('login', [HomeController::class, 'showFormLogin'])->name('login');
    Route::post('login', [HomeController::class, 'handleLogin']);
    Route::get('logout', [HomeController::class, 'logOut'])-> name('logout');
    Route::get('register', [HomeController::class, 'showFormRegister'])->name('showFormRegister');
    Route::post('register', [HomeController::class, 'handleRegister']);
    Route::get('addUserInfo', [HomeController::class, 'showFomrAddUserInfo'])->name('showFomrAddUserInfo');
    Route::post('addUserInfo', [HomeController::class, 'handleAddUserInfo']);
    Route::get('get', [HomeController::class, 'getSession']);
    Route::get('set', [HomeController::class, 'setSession']);
    Route::get('unset', [HomeController::class, 'unsetSession']);
    Route::get('profile', [HomeController::class, 'viewProfile'])->name('profile');
    Route::get('update', [UserController::class, 'showFormUpdate'])->name('updateUser');
    Route::post('update', [UserController::class, 'handleUpdateUser']);
    Route::get('insert', [ProductController::class, 'showFormInsert'])->name('insertProduct');
    Route::post('insert', [ProductController::class, 'handleInsert']);
    // Route::get('product', [ProductController::class, 'getProductFromProvince'])->name('getProductFromProvince');
    Route::get('/{tentinh}', [ProductController::class, 'getProductFromProvince'])->name('getProductFromProvince');
    Route::get('search', [ProductController::class, 'searchProduct'])->name('search');
    Route::post('search', [ProductController::class, 'handleSearchProduct']);




});
Route::prefix('/admin')->group(function(){ 
    Route::get('user', [UserController::class, 'index'])->name('admin.user');
    Route::get('product', [ProductController::class, 'getAllPro'])->name('admin.product');
    Route::get('delete/{id}', [UserController::class, 'remove']);
    Route::get('edit/{id}', [AdminController::class, 'showFormEdit']);
    Route::post('edit/{id}', [AdminController::class, 'handleUpdateUser']);


});
Route::get('/themsp', [HomeController::class, 'getAdd']);
Route::post('/themsp', [HomeController::class, 'postAdd']);









//Client router

// Route::prefix('categories')->group(function(){

//     //Danh sach
//     Route::get('/', [CategoriesController::class, 'index'])->name('category.list');

   

//     //Xu li post
//     Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory'])->name('categories');

//      //Lay chi tiet 1 muc, Hien thi form o day
//      Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('category.edit');
    

//     //xu li them chuyen muc
//     Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

//     //hien thi form add du lieu
//     Route::get('/add', [CategoriesController::class, 'addCategory'])->name('category.add');


//     //Xoa
//     Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('category.delete');
//     //xu li file
//     Route::post('/upload', [CategoriesController::class, 'handleFile'])->name('category_upload');

//     //hien thi form upload file
//     Route::get('/upload', [CategoriesController::class, 'getFile']);



// });
// //admin router
// Route::middleware('auth.admin')->prefix('admin')->group(function(){
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('product',productController::class);
// });

// Route::get('sanpham/{id}',[HomeController::class, 'getProductDetail']);



