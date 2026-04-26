<?php

use App\Http\Controllers\Api\FormController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::post('save', [FormController::class, 'save']);
});

