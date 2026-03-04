<?php

use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('owners.index'));

Route::resource('owners', OwnerController::class);
