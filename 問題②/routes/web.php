<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/thanks', [AuthorController::class, 'thanks']);
Route::post('/thanks', [AuthorController::class, 'create']);