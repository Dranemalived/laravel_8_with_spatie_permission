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

    // Route::resources([
    //     'category' => CategoryController::class,
    //     'product' => ProductController::class
    // ]);

    /**Category route */
    Route::get('/category', [CategoryController::class, 'index'])->middleware('permission:view_category');
    Route::middleware(['permission:create_category'])->group(function () {
        Route::get('/category/create', [CategoryController::class, 'create']);
        Route::post('/category/create', [CategoryController::class, 'store']);
    });
    Route::middleware(['permission:edit_category'])->group(function () {
        Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('/category/{id}', [CategoryController::class, 'update']);
    });
    Route::delete('/category/{id}', [CategoryController::class, 'delete'])->middleware('permission:delete_category');

    /**Product route */
    Route::get('/product', [ProductController::class, 'index'])->middleware('permission:view_product');
    Route::middleware(['permission:create_product'])->group(function () {
        Route::get('/product/create', [ProductController::class, 'create']);
        Route::post('/product/create', [ProductController::class, 'store']);
    });
    Route::middleware(['permission:edit_product'])->group(function () {
        Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
        Route::put('/product/{id}', [ProductController::class, 'update']);
    });
    Route::delete('/product/{id}', [ProductController::class, 'delete'])->middleware('permission:delete_product');


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
    Route::post('/permission/create/search', [PermissionController::class, 'search']);
});







require __DIR__ . '/auth.php';
