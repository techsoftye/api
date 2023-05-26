<?php

use Illuminate\Support\Facades\Route;

Route::post('license-deactivate', [\Techsoft\Api\Http\Controllers\LicenseSettingsController::class,'license_deactivate'])->name('techsoft.api.license.deactivate');

