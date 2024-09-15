<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataMiningController;

// Route::get('/process-doc', [DataMiningController::class, 'processDocFile']);
Route::get('/process-pdf', [DataMiningController::class, 'processPdfFile']);
// Route::get('/process-csv', [DataMiningController::class, 'processCsvFile']);
