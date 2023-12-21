<?php

use App\Http\Controllers\AdminOrderController;
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
use App\Http\Controllers\SslCommerzPaymentController;

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


Route::get('/item-category/{id}', [CategoryController::class, 'ItemCategory'])->name('category.item');
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/search-item', [FrontendController::class, 'search'])->name('item.search');
Route::get('/front_item', [FrontendItemController::class, 'showlist'])->name('front_item');

Route::get('/customer/register', [FrontendCustomerController::class, 'register'])->name('customer.register');
Route::post('/customer/doregister', [FrontendCustomerController::class, 'doRegister'])->name('customer.doregister');
Route::get('/cutomer/login', [FrontendCustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/dologin', [FrontendCustomerController::class, 'doLogin'])->name('customer.dologin');

Route::get('/single-item/{id}', [FrontendItemController::class, 'singleItemtView'])->name('single.item');

Route::get('/item-under-category/{cat_id}', [FrontendController::class, 'itemsUnderCategory'])->name('items.under.category');


//cart routes here
Route::get('/cart-view', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('/add-to-cart/{item_id}', [CartController::class, 'addToCart'])->name('add.toCart');



Route::group(['middleware' => 'checkCustomer'], function () {

    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

    Route::post('/order-place', [FrontendOrderController::class, 'orderPlace'])->name('order.place');

    Route::get('/profile', [FrontendCustomerController::class, 'userprofile'])->name('profile.view');
    Route::get('/logout', [FrontendCustomerController::class, 'logout'])->name('customer.logout');
    // Route::get('/buy-now/{product_id}',[OrderController::class,'buyNow'])->name('buy.now');
    Route::get('/order-now/{item_id}', [FrontendOrderController::class, 'orderNow'])->name('order.now');
    Route::get('/cancel-order/{item_id}', [FrontendOrderController::class, 'cancelOrder'])->name('order.cancel');

    
   
    
    // SSLCOMMERZ Start

    Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
    Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
    
    Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
    
    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
    
    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']); 

    
   //SSLCOMMERZ END

});



//login

Route::group(['prefix' => 'admin'], function () {

    Route::get('admin/login', [UserController::class, 'loginform'])->name('admin.login');
    Route::post('/login-form-post', [UserController::class, 'loginpost'])->name('login.post');

    Route::group(['middleware' => 'auth'], function () {

        Route::group(['middleware' => 'checkAdmin'], function () {

            Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');
            Route::get('/profile', [UserController::class, 'profile'])->name('profie.view');
            Route::get('/', [HomeController::class, 'home'])->name('dashboard');
            Route::get('/dashboard', [HomeController::class, 'dashboardhome'])->name('dashboard.home');

            //users

            Route::get('/users', [UserController::class, 'list'])->name('users.list');
            Route::get('/users/create', [UserController::class, 'createForm'])->name('users.create');
            Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

            Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
            Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
            Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');




            //category

            Route::get('/category-list', [CategoryController::class, 'list'])->name('category.list');
            Route::get('/category/view/{id}', [CategoryController::class, 'view'])->name('category.view');

            Route::get('/category-create', [CategoryController::class, 'create'])->name('category.create');
            Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

            Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
            Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
            Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


            //Item

            Route::get('/Item/Print', [ItemController::class, 'print'])->name('Item.print');

            Route::get('/Item/list', [ItemController::class, 'list'])->name('Item.list');
            Route::get('/Item/create', [ItemController::class, 'create'])->name('Item.create');
            Route::post('/Item/store', [ItemController::class, 'store'])->name('Item/store');

            Route::get('/Item/edit/{id}', [ItemController::class, 'edit'])->name('Item.edit');
            Route::post('/Item/update/{id}', [ItemController::class, 'update'])->name('Item.update');
            Route::get('/Item/delete/{id}', [ItemController::class, 'delete'])->name('Item.delete');


            //order
            Route::get('/order/list', [AdminOrderController::class, 'list'])->name('order.list');

            Route::get('/order/delete/{id}', [AdminOrderController::class, 'delete'])->name('order.delete');

            //Customer

            Route::get('/Customer/list', [CustomerController::class, 'list'])->name('Customer.list');

            Route::get('/Customer/delete/{id}', [CustomerController::class, 'delete'])->name('Customer.delete');

            //Delivery

            Route::get('/Delivery/list', [DeliveryController::class, 'list'])->name('Delivery.list');
            Route::get('/Delivery/create', [DeliveryController::class, 'create'])->name('Delivery.create');
            Route::post('/Delivery/store', [DeliveryController::class, 'store'])->name('Delivery.store');



            // Route::get('/frontend_home', [FrontendHomeController::class, 'home'])->name('Frontendhome');




        });
    });
});
