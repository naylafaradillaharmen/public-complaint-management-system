<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplainsController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\User\ComplainsController as UserComplainsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// Akses Guest
Route::controller(BaseController::class)->group(function () {
    Route::get('/', 'landing')->name('landing.page');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'iniAdmin'])->group(function () {
    // ROute Per Controller
    Route::controller(FrontController::class)->group(function () {
        Route::get('/dashboard', 'indexFront')->name('dashboard.admin');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'indexCategory')->name('index.category');
        Route::post('/create-category', 'createCategory')->name('create.category');
        Route::put('/update-category', 'updateCategory')->name('update.category');
        Route::delete('/delete-category', 'deleteCategory')->name('delete.category');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'indexUser')->name('user.admin');
        // Create biasanya buat form, kalau store buat logic create nya
        Route::post('/user-create', 'createUser')->name('user.create');
        // edit biasanya buat form, kalau update buat logic update nya
        Route::put('/user-update', 'updateUser')->name('user.update');
        Route::delete('/user-delete', 'deleteUser')->name('user.delete');
    });
    Route::controller(ComplainsController::class)->group(function () {
        Route::get('/complains', 'indexComplains')->name('index.complains');
        Route::put('/update/status/{id}', 'updateStatus')->name('update.status');
    });
    Route::controller(ResponseController::class)->group(function () {
        Route::get('/response', 'indexResponse')->name('index.response');
        Route::get('/response/form/{complain_id}', 'formResponse')->name('form.response');
        Route::post('/response/create', 'createResponse')->name('create.response');
        Route::put('/response/update', 'updateResponse')->name('update.response');
        Route::delete('/response/delete', 'deleteResponse')->name('delete.response');
    });
});

// Route Untuk Akses User
Route::prefix('user')->middleware(['auth', 'iniUser'])->group(function () {
    Route::controller(DashboardUserController::class)->group(function () {
        Route::get('/my-complains', 'myComplains')->name('my.complains');
    });
    Route::controller(UserComplainsController::class)->group(function () {
        Route::get('/pengaduan-my', 'tableUser')->name('pengaduan.my');
        Route::get('/form-aduan', 'formAduan')->name('form.aduan');
        Route::post('/form-aduan/store', 'storeAduan')->name('store.aduan');
        Route::delete('/form-aduan/delete', 'deleteAduan')->name('delete.aduan');
    });
});
