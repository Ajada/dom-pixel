<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Tenant\ProductController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('dashboard');

    Route::get('/new', [ProductController::class, 'create'])->name('new-product');
    Route::post('/add-item', [ProductController::class, 'store'])->name('add-item');
    
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::get('/edit-item/{id}', [ProductController::class, 'edit'])->name('edit-item'); // TODO: corrigir redirect após edição, soluçao temporária
    Route::put('/edit-item/{id}', [ProductController::class, 'update'])->name('edit-item');

    Route::get('/delete/{id}', [ProductController::class, 'index'])->name('delete-item'); // TODO: corrigir redirect após delete, solução temporária
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('delete-item');

});


