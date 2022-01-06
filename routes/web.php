<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/content/{id}/{slug}', [HomeController::class, 'content'])->name('content');
Route::get('/categorycontents/{id}/{slug}', [HomeController::class, 'categorycontents'])->name('categorycontents');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::post('/getcontent', [HomeController::class, 'getcontent'])->name('getcontent');
Route::get('/contentlist/{search}', [HomeController::class, 'contentlist'])->name('contentlist');


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {

    #Admin Role
    Route::middleware('admin')->group(function (){

    Route::get('/', [AdminHomeController::class, 'index'])->name('admin_home');
    #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Content
    Route::prefix('content')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ContentController::class, 'index'])->name('admin_content');
        Route::get('create', [\App\Http\Controllers\Admin\ContentController::class, 'create'])->name('admin_content_add');
        Route::post('store', [\App\Http\Controllers\Admin\ContentController::class, 'store'])->name('admin_content_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'edit'])->name('admin_content_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'update'])->name('admin_content_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'destroy'])->name('admin_content_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ContentController::class, 'show'])->name('admin_content_show');
    });

    #Message
    Route::prefix('messages')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });

    #Content Image Gallery
    Route::prefix('image')->group(function () {

        Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    #Faq
    Route::prefix('faq')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
    });

        #User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });

    });
});


    Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

        Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('userprofile');

        #Content
        Route::prefix('content')->group(function () {
            Route::get('/', [ContentController::class, 'index'])->name('user_content');
            Route::get('create', [ContentController::class, 'create'])->name('user_content_add');
            Route::post('store', [ContentController::class, 'store'])->name('user_content_store');
            Route::get('edit/{id}', [ContentController::class, 'edit'])->name('user_content_edit');
            Route::post('update/{id}', [ContentController::class, 'update'])->name('user_content_update');
            Route::get('delete/{id}', [ContentController::class, 'destroy'])->name('user_content_delete');
            Route::get('show', [ContentController::class, 'show'])->name('user_content_show');
        });

        #Content Image Gallery
        Route::prefix('image')->group(function () {

            Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
            Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
            Route::get('delete/{id}/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');
        });

    });


    Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
    Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
