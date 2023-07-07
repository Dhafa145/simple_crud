<?php

use App\Http\Controllers\KandidatController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/kandidat', \App\Http\Controllers\KandidatController::class);