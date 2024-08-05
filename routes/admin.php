<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'is_admin'])->group(function () {


    Route::prefix('admin')->as('admin.')->group(function () {
        $crud = [
            'posts' => PostController::class,
            'categories' => CategoryController::class ,
            'tags' => TagController::class,
        ];

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        foreach ($crud as $route => $controller) {
            Route::resource($route, $controller);
            Route::put("$route/restore/{id}", [$controller, 'restore'])->name("$route.restore");
        }

    });
});
