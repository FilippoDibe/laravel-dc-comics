<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

Route :: get('/', [ComicController :: class, 'index'])
    -> name('comic.index');

Route :: get('/comics/create', [ComicController :: class, 'create'])
    -> name('comic.create');
Route :: post('/comics', [ComicController :: class, 'store'])
    -> name('comic.store');

Route :: get('/comics/{id}', [ComicController :: class, 'show'])
    -> name('comic.show');


    Route :: get('/comics/{id}/edit', [ComicController:: class, 'edit'])
        ->name('comic.edit');
    Route::get('/comics/{id}', [ComicController::class, 'update'])
        ->name('comic.update');
    Route::get('/comic/{id}/delete', [ComicController::class, 'delete'])
        ->name('comic.delete');
    Route::delete('/comic/{id}', [ComicController::class, 'destroy'])
        ->name('comic.destroy');
