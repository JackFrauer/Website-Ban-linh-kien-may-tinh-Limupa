<?php


use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;

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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [ProductsController::class, 'index']);
Route::get('/product/{id}', [ProductsController::class, 'show'])->name('product.show');
Route::get('/shop', [ProductsController::class, 'shop'])->name('shop');
Route::get('/shop/{product_types}', [ProductsController::class, 'shop'])->name('shop.filter');





Route::middleware(['admin'])->group(function () {
    Route::get('/god', [AdminController::class, 'index']);
    Route::get('admin/product_table/insert', [AdminController::class, 'create']);
    Route::get('/admin/product_table', [AdminController::class, 'table_product']);
    route::post('/admim/insert', [AdminController::class, 'store'])->name('insert_product');
    //edit
    route::put('/admin/edit/{product}', [AdminController::class, 'update']);
    //show the form for edit
    route::get('/admin/product_table/{product}', [AdminController::class, 'edit']);

    //delete
    route::delete('/admin/delete/{product}', [AdminController::class, 'destroy']);

    route::get('/admin/user/{id}', [AdminController::class, 'show_user']);
    route::put('/admin/user_update/{id}', [AdminController::class, 'update_user'])->name('user_update');
    route::delete('admin/delete_user/{id}', [AdminController::class, 'delete_user']);


    route::delete('/admin/delete_order/{id}', [AdminController::class, 'delete_order']);
    route::get('/admin/order/{id}', [AdminController::class, 'show_order']);
    route::put('/admin/order_update/{id}', [AdminController::class, 'update_order'])->name('order_update');

    route::get('/admin/manufacturers',[AdminController::class,'list_manufacturer']);
    route::get('/admin/manufacturers/update/{id}',[AdminController::class,'show_manufacturer']);
    route::put('/admin/manufacturer/update/{id}',[AdminController::class,'update_manufacturer']);

});


//show the form for register/login
route::get('/register', [UserController::class, 'index'])->name('login')->middleware('guest');
//register
route::post('/users', [UserController::class, 'store'])->name('register_user')->middleware('guest');

//logout
route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
//login
route::post('/login', [UserController::class, 'login'])->name('loginuser')->middleware('guest');



Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
route::get('/cart', [CartController::class, 'show'])->name('cart.index')->middleware('auth');
Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart')->middleware('auth');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart')->middleware('auth');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout')->middleware('auth');

route::get('/about',[AboutController::class,'index']);
