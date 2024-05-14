<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {

    $pass = 'Password123';
    $hashPass = Hash::make('Password1234');
    dd(Hash::check($pass, $hashPass));
    //return view('welcome');
});
//Route::post('/post-request', [UserController::class, 'postRequest'])->name('postRequest');
//Route::get('/tambah-product', [UserController::class, 'handleRequest'])->name('form_product');
//Route::get('/products', [UserController::class, 'getProduct'])->name('get_product');
//Route::get('/product/{product}', [UserController::class, 'editProduct'])->name('edit_product');
//Route::put('/product/{product}/update', [UserController::class, 'updateProduct'])->name('update_product');
//Route::post('/product/{product}/delete', [UserController::class, 'deleteProduct'])->name('delete_product');
//Route::get('/profile', [UserController::class, 'getProfile'])->name('get_profile');

//Route::get('/admin/list-products', [UserController::class, 'getAdmin'])->name('admin_page');

//Route::get('/cafe-amandemy', [UserController::class, 'cafe']);

Route::post('/{user}/post-request', [UserController::class, 'postRequest'])->name('postRequest');
Route::get('/{user}/tambah-product', [UserController::class, 'handleRequest'])->name('form_product');
Route::get('/products', [UserController::class, 'getProduct'])->name('get_product');
Route::get('/{user}/product/{product}', [UserController::class, 'editProduct'])->name('edit_product');
Route::put('/{user}/product/{product}/update', [UserController::class, 'updateProduct'])->name('update_product');
Route::post('/{user}/product/{product}/delete', [UserController::class, 'deleteProduct'])->name('delete_product');
Route::get('/profile/{user}', [UserController::class, 'getProfile'])->name('get_profile');

Route::get('/admin/{user}/list-products', [UserController::class, 'getAdmin'])->name('admin_page');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register_user');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('login_user');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware(['authenticate', 'role:superadmin|user']);
Route::get('/login/google', [UserController::class, 'loginGoogle'])->name('login_google');
Route::get('/login/google/callback', [UserController::class, 'loginGoogleCallback'])->name('callback_google');

Route::get('/cafe-amandemy', [UserController::class, 'cafe']);

// Route::post('/posts/{post}/delete', [PostController::class, 'delete']);

