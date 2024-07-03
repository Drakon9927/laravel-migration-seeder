<?php

use App\Http\Controllers\TrainController;

Route::get('/trains', [TrainController::class, 'index']);