<?php

use App\Http\Controllers\Api\V1\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/person', PersonController::class);
