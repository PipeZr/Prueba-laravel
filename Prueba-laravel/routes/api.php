<?php

use App\Http\Controllers\EmployeeController;

Route::get('/empleados', [EmployeeController::class, 'filter']);
