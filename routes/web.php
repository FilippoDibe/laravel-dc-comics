<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('pages.index');
});
// includere le rotte per le operazioni CRUD

use App\Http\Controllers\ComicController;

Route::resource('pages', ComicController::class);
