<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Biodata\BiodataController;

Route::get('/b', [BiodataController::class, 'index']);

Route::group([
    'namespace' => 'App\Http\Controllers\Api\v1',
    'prefix' => 'biodata'
], function ($router) {
    
    Route::post('create', [BiodataController::class, 'saveBiodata'])->name('biodata.create');
    Route::get('list', [BiodataController::class, 'listBiodata'])->name('biodata.list');
    Route::delete('{id}', [BiodataController::class, 'deleteBiodata'])->name('biodata.delete');
    Route::get('{id}', [BiodataController::class, 'editBiodata'])->name('biodata.edit');
    Route::post('{id}', [BiodataController::class, 'updateBiodata'])->name('biodata.update');

});
