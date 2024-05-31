<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdviceController;

Route::get('/advice', [AdviceController::class, 'index']);

