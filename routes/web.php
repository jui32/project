<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\CategoryController;
use App\Http\controllers\UserController;
use App\Http\controllers\ItemController;
use App\Http\controllers\OrderController;
use App\Http\controllers\CustomerController;
use App\Http\controllers\DeliveryController;





use App\Http\Controllers\Frontend\CartController;
use App\Http\controllers\Frontend\FrontendController;
use App\Http\controllers\Frontend\FrontendCustomerController;
use App\Http\Controllers\Frontend\FrontendItemController;
use App\Http\Controllers\Frontend\OrderController as FrontendOrderController;

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




Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/front_item',[FrontendItemController::class,'showlist'])->name('front_item');

Route::get('/customer/register',[FrontendCustomerController::class,'register'])->name('customer.register');
Route::post('/customer/doregister', [FrontendCustomerController::class, 'doRegister'])->name('customer.doregister');
Route::get('/cutomer/login', [FrontendCustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/dologin', [FrontendCustomerController::class, 'doLogin'])->name('customer.dologin');

Route::get('/single-item/{id}', [FrontendItemController::class, 'singleItemtView'])->name('single.item');


//cart routes here
Route::get('/cart-view',[CartController::class,'viewCart'])->name('cart.view');
Route::get('/add-to-cart/{item_id}',[CartController::class,'addToCart'])->name('add.toCart');



Route::group(['middleware' => 'auth'], function () {
Route::get('/profile', [FrontendCustomerController::class, 'profile'])->name('profile.view');
Route::get('/logout', [FrontendCustomerController::class, 'logout'])->name('customer.logout');
Route::get('/buy-now/{product_id}',[OrderController::class,'buyNow'])->name('buy.now');
Route::get('/order-now/{item_id}',[FrontendOrderController::class,'orderNow'])->name('order.now');

});



Route::group(['middleware' => 'auth'], function () {
});


//login

Route::group(['prefix'=>'admin'],function(){
    
    Route::get('admin/login',[UserController::class,'loginform'])->name('admin.login');
    Route::post('/login-form-post',[UserController::class,'loginpost'])->name('login.post');

Route::group(['middleware'=>'auth'],function(){

    Route::group(['middleware' => 'checkAdmin'], function () {

Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
Route::get('/profile',[UserController::class,'profile'])->name('profie.view');
Route::get('/', [HomeController::class, 'home'])->name('dashboard');

//users

Route::get('/users', [UserController::class, 'list'])->name('users.list');
Route::get('/users/create', [UserController::class, 'createForm'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');


//category

Route::get('/category-list',[CategoryController::class, 'list'])->name('category.list');
Route::get('/category-create',[CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class, 'store'])->name('category.store');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'edit'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


//Item

Route::get('/Item/list',[ItemController::class,'list'])->name('Item.list');
Route::get('/Item/create',[ItemController::class,'create'])->name('Item.create');
Route::post('/Item/store',[ItemController::class,'store'])->name('Item/store');

Route::get('/Item/edit/{id}', [ItemController::class, 'edit'])->name('Item.edit');
Route::post('/Item/update/{id}', [ItemController::class, 'update'])->name('Item.update');
Route::get('/Item/delete/{id}', [ItemController::class, 'delete'])->name('Item.delete');




//order

Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
Route::post('/order/store',[OrderController::class,'store'])->name('order.store');

//Customer

Route::get('/Customer/list',[CustomerController::class,'list'])->name('Customer.list');
// Route::get('/Customer/create',[CustomerController::class,'create'])->name('Customer.create');
// Route::post('/Customer/store',[CustomerController::class,'store'])->name('Customer.store');

//Delivery

Route::get('/Delivery/list',[DeliveryController::class,'list'])->name('Delivery.list');
Route::get('/Delivery/create',[DeliveryController::class,'create'])->name('Delivery.create');
Route::post('/Delivery/store',[DeliveryController::class,'store'])->name('Delivery.store');



// Route::get('/frontend_home', [FrontendHomeController::class, 'home'])->name('Frontendhome');




});
});
});