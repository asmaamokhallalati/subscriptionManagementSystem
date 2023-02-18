<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('roles', RoleController::class);
// Route::resource('permissions', PermissionController::class);



 Route::prefix('cms/admin')->group(function () { 
    Route::resource('admins', AdminController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);


    Route::get('roles/{role}/permissions',[RoleController::class,'editRolePermissions'])->name('role.edit-permissions');
    Route::put('roles/{role}/permissions',[RoleController::class,'updateRolePermissions']);

    Route::get('users/{user}/permissions',[UserController::class,'editPermissions'])->name('user.edit-permissions');
    Route::put('users/{user}/permissions',[UserController::class,'updatePermissions']);

 });
