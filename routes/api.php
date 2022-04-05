<?php

use App\Http\Controllers\Api\XhashController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('zip-codes/{zip_code}', XhashController::class)->name('api.xhash');