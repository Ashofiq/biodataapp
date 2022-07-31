<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Biodata\BiodataController;

Route::get('/b', [BiodataController::class, 'index']);
