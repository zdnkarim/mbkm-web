<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutboundController;
use App\Http\Controllers\InboundController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MbkmController;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;

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
    if(! Auth::user()){
        return redirect('/login');
    }else{
        $idUser = Auth::user()->id;
        $query = UserRole::where('user_id',$idUser)->first();
        if(empty($query->role_id)){
            return redirect('/');
        }else{
            $idRole = $query->role_id;
            // dd($idRole);
            if($idRole == 1){
                return redirect('/dashboard/data-outbound');
            }elseif($idRole == 2){
                return redirect('/dashboard/outbound-profile');
            }elseif($idRole == 3){
                return redirect('/dashboard/inbound-profile');
            }else{
                return redirect('/home');
            }
        }
    }
});

Auth::routes();

Route::get('/dashboard',function (){
    if(! Auth::user()){
        return redirect('/login');
    }else{
        $idUser = Auth::user()->id;
        $query = UserRole::where('user_id',$idUser)->first();
        if(empty($query->role_id)){
            return redirect('/');
        }else{
            $idRole = $query->role_id;
            // dd($idRole);
            if($idRole == 1){
                return redirect('/dashboard/data-outbound');
            }elseif($idRole == 2){
                return redirect('/dashboard/outbound-profile');
            }elseif($idRole == 3){
                return redirect('/dashboard/inbound-profile');
            }else{
                return redirect('/home');
            }
        }
    }
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('api/get-program-outbound',[MbkmController::class, 'getProgramOutbound']);
Route::post('api/get-program-inbound',[MbkmController::class, 'getProgramInbound']);

Route::get('/dashboard/outbound-profile', [OutboundController::class, 'profileMhs']);
Route::post('/dashboard/outbound-profile/submit', [OutboundController::class, 'submit']);

Route::get('/dashboard/inbound-profile', [InboundController::class, 'profileMhs']);
Route::post('/dashboard/inbound-profile/submit', [InboundController::class, 'submit']);

Route::get('/dashboard/data-outbound', [AdminController::class, 'dataOut']);
Route::get('/dashboard/data-outbound/{id}/show', [AdminController::class, 'showDataOut']);
Route::post('/dashboard/data-outbound/{id}/submit', [AdminController::class, 'submitDataOut']);
Route::get('/dashboard/data-outbound/{id}/delete', [AdminController::class, 'deleteDataOut']);

Route::get('/dashboard/data-inbound', [AdminController::class, 'dataIn']);
Route::get('/dashboard/data-inbound/{id}/show', [AdminController::class, 'showDataIn']);
Route::post('/dashboard/data-inbound/{id}/submit', [AdminController::class, 'submitDataIn']);
Route::get('/dashboard/data-inbound/{id}/delete', [AdminController::class, 'deleteDataIn']);

Route::get('/dashboard/mbkm-jenis', [AdminController::class, 'jenisMbkm']);
Route::post('/dashboard/mbkm-jenis/create', [AdminController::class, 'createJenis']);
Route::get('/dashboard/mbkm-jenis/{id}/show', [AdminController::class, 'showJenis']);
Route::post('/dashboard/mbkm-jenis/{id}/update', [AdminController::class, 'updateJenis']);
Route::get('/dashboard/mbkm-jenis/{id}/validationDelete', [AdminController::class, 'valDelJenis']);
Route::get('/dashboard/mbkm-jenis/{id}/delete', [AdminController::class, 'deleteJenis']);

Route::get('/dashboard/mbkm-program', [AdminController::class, 'programMbkm']);
Route::post('/dashboard/mbkm-program/create', [AdminController::class, 'createProgram']);
Route::get('/dashboard/mbkm-program/{id}/show', [AdminController::class, 'showProgram']);
Route::post('/dashboard/mbkm-program/{id}/update', [AdminController::class, 'updateProgram']);
Route::get('/dashboard/mbkm-program/{id}/validationDelete', [AdminController::class, 'valDelProgram']);
Route::get('/dashboard/mbkm-program/{id}/delete', [AdminController::class, 'deleteProgram']);