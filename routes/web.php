<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {return view('welcome');});

//Route::get('/test-error', function () {abort(500, 'This is a test error.');});

//Route::get('/notes', [NoteController::class, 'index']);
Route::apiResource('notes', NoteController::class);