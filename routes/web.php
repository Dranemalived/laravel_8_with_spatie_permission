<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Models\Cetegory;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/category');
    });

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class
    ]);

    // Route::middleware(['roles:user'])->group(function () {
    //     Route::get('/user', [UserController::class, 'index']);
    //     Route::get('/user/{user}/edit', [UserController::class, 'edit']);
    //     Route::put('/user/{user}', [UserController::class, 'update']);
    // });
    // Route::middleware(['roles:role'])->group(function () {
    //     Route::get('/role', [RoleController::class, 'index']);
    //     Route::get('/role/create', [RoleController::class, 'create']);
    // });

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/{user}/edit', [UserController::class, 'edit']);
    Route::put('/user/{user}', [UserController::class, 'update']);

    /**Role route */
    Route::get('/role', [RoleController::class, 'index']);
    Route::get('/role/create', [RoleController::class, 'create']);
    Route::post('/role/create', [RoleController::class, 'store']);
    Route::get('/role/{id}/edit', [RoleController::class, 'edit']);
    Route::put('/role/{id}', [RoleController::class, 'update']);
    Route::delete('/role/{id}', [RoleController::class, 'delete']);



    Route::get('/permission', [PermissionController::class, 'index']);
    Route::get('/permission/create', [PermissionController::class, 'create']);
    Route::post('/permission/create', [PermissionController::class, 'store']);
});







require __DIR__ . '/auth.php';
