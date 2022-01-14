<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DiamondController;
use App\Http\Controllers\Member\LayananMemberController;

use App\Models\User;
use App\Models\Layanan;
use App\Models\Order;
use App\Models\Member;
use App\Models\Diamond;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
    //return view('welcome');
});

Route::get('/tes', function () {
        return view('tes');
        //return view('welcome');
    });


//Routing member area
Route::get('/area', [App\Http\Controllers\HomeController::class, 'area'])->name('area');

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Auth::routes();



//Routing Admin
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');



//Routing Member => Admin
Route::get('/admin/member', [MemberController::class, 'index'])->name('admin.member')->middleware('is_admin');
Route::delete('/admin/member/{id}/destroy', [MemberController::class, 'destroy'])
        ->name('admin.member.destroy')
        ->middleware('is_admin');  
Route::get('/admin/member/{id}/edit', [MemberController::class, 'edit'])
        ->name('admin.member.edit')
        ->middleware('is_admin');
Route::put('/admin/member/{id}/edit', [MemberController::class, 'update'])
        ->name('admin.member.update')
        ->middleware('is_admin');    

//routing layanan => Admin
Route::get('/admin/layanan', [LayananController::class, 'index'])->name('admin.layanan')->middleware('is_admin');
Route::get('/admin/layanan/create', [LayananController::class, 'create'])
        ->name('admin.layanan.create')
        ->middleware('is_admin');
Route::post('/admin/layanan/store', [LayananController::class, 'store'])
        ->name('admin.layanan.store')
        ->middleware('is_admin');
Route::get('/admin/layanan/{id}/edit', [LayananController::class, 'edit'])
        ->name('admin.layanan.edit')
        ->middleware('is_admin');
Route::delete('/admin/layanan/{id}/destroy', [LayananController::class, 'destroy'])
        ->name('admin.layanan.destroy')
        ->middleware('is_admin');   
Route::get('/admin/layanan/{id}/edit', [LayananController::class, 'edit'])
        ->name('admin.layanan.edit')
        ->middleware('is_admin');        
Route::put('/admin/layanan/{id}/edit', [LayananController::class, 'update'])
        ->name('admin.layanan.update')
        ->middleware('is_admin');  

//routing order => admin
Route::get('/admin/order', [OrderController::class, 'index'])
        ->name('admin.order')
        ->middleware('is_admin');
        Route::get('/admin/order/create', [OrderController::class, 'create'])
        ->name('admin.order.create')
        ->middleware('is_admin');
Route::post('/admin/order/store', [OrderController::class, 'store'])
        ->name('admin.order.store')
        ->middleware('is_admin');
Route::delete('/admin/order/{id}/destroy', [OrderController::class, 'destroy'])
        ->name('admin.order.destroy')
        ->middleware('is_admin');
Route::get('/admin/order/{id}/edit', [OrderController::class, 'edit'])
        ->name('admin.order.edit')
        ->middleware('is_admin');
Route::put('/admin/order/{id}/edit', [OrderController::class, 'update'])
        ->name('admin.order.update')
        ->middleware('is_admin');

//Routing Diamond => admin
Route::get('/admin/diamond', [DiamondController::class, 'index'])->name('admin.diamond')->middleware('is_admin');
Route::get('/admin/diamond/create', [DiamondController::class, 'create'])
        ->name('admin.diamond.create')
        ->middleware('is_admin');
Route::post('/admin/diamond/store', [DiamondController::class, 'store'])
        ->name('admin.diamond.store')
        ->middleware('is_admin');
Route::get('/admin/diamond/{id}/edit', [DiamondController::class, 'edit'])
        ->name('admin.diamond.edit')
        ->middleware('is_admin');
Route::delete('/admin/diamond/{id}/destroy', [DiamondController::class, 'destroy'])
        ->name('admin.diamond.destroy')
        ->middleware('is_admin');   
Route::get('/admin/diamond/{id}/edit', [DiamondController::class, 'edit'])
        ->name('admin.diamond.edit')
        ->middleware('is_admin');        
Route::put('/admin/diamond/{id}/edit', [DiamondController::class, 'update'])
        ->name('admin.diamond.update')
        ->middleware('is_admin');  

//Routing Member
Route::get('/member/depan', [HomeController::class, 'depan'])->name('member.depan')->middleware('checkrole:0');
Route::get('/member/layanan', [LayananMemberController::class, 'index'])->name('member.layanan')->middleware('checkrole:0');
Route::get('/member/layanan/{id}/detail', [LayananMemberController::class, 'detail'])
        ->name('member.layanan.detail')
        ->middleware('checkrole:0');
Route::get('/member/layanan/{id}/checkout', [LayananMemberController::class, 'checkout'])
        ->name('member.layanan.checkout')
        ->middleware('checkrole:0');
Route::post('/member/layanan/store', [LayananMemberController::class, 'store'])
        ->name('member.layanan.store')
        ->middleware('checkrole:0');
Route::delete('/member/layanan/{id}/batalorder', [LayananMemberController::class, 'batalorder'])
        ->name('member.layanan.batalorder')
        ->middleware('checkrole:0');
Route::get('/member/layanan/{id}/cetakinvoice', [LayananMemberController::class, 'cetakinvoice'])
        ->name('member.layanan.cetakinvoice')
        ->middleware('checkrole:0');        

