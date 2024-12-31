<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('todo/list', [TodoController::class, 'list']);
Route::post('todo/create', [TodoController::class, 'create']);
Route::put('todo/update', [TodoController::class, 'update']);
Route::delete('todo/delete', [TodoController::class, 'delete']);

