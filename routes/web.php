<?php

use app\Http\Middleware\IsAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LeadController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AddLeadUsersController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;


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

Route::get('/', function () {
    return view('auth.login');
});

require __DIR__.'/auth.php';

Route::group(["prefix"=>'admin', 'middleware'=>['admin', 'auth']], function(){

    Route::get('/notify', [LeadController::class,'notify'])->name('user.notify');

    Route::get('/manage/user',[AddLeadUsersController::class,'index'])->name('manage-user');
    Route::get('/lead/view',[AddLeadUsersController::class,'lead_view'])->name('lead-view');
    Route::get('/add/user',[AddLeadUsersController::class,'create'])->name('add-user');
    Route::post('/user/store',[AddLeadUsersController::class,'store'])->name('store-user');
    Route::get('/user/edit/{id}',[AddLeadUsersController::class,'edit'])->name('edit-user');
    Route::post('/user/update/{id}',[AddLeadUsersController::class,'update'])->name('update-user');
    Route::get('/user/destroy/{id}',[AddLeadUsersController::class,'destroy'])->name('destroy-user');
    Route::get('/lead/edit/{id}',[AddLeadUsersController::class,'leadEdit'])->name('view-lead');
    Route::post('/lead/update/{id}',[AddLeadUsersController::class,'leadUpdate'])->name('updateLead');

});

Route::group(["prefix"=>'user', 'middleware'=>['user']], function(){

    Route::get('/notifications', [LeadController::class,'notifications'])->name('user.notifications');

    Route::get('/lead/view',[LeadController::class,'index'])->name('index');
    Route::get('/lead/add',[LeadController::class,'leadindex'])->name('create');
    Route::post('/lead/create',[LeadController::class,'create'])->name('store');
    Route::get('/lead/edit/{id}',[LeadController::class,'edit'])->name('edit-lead');
    Route::post('/lead/update/{id}',[LeadController::class,'update'])->name('update-lead');
});

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
