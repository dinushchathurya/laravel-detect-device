<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

Route::get('/', [DeviceController::class, 'detectDevice']);
Route::get('/devices', [DeviceController::class, 'detectDevices']);

