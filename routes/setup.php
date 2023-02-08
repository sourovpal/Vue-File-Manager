<?php

use Domain\SetupWizard\Controllers\StoreAppSettingsController;
use Domain\SetupWizard\Controllers\CreateAdminAccountController;
use Domain\SetupWizard\Controllers\VerifyPurchaseCodeController;
use Domain\SetupWizard\Controllers\StoreDatabaseCredentialsController;
use Domain\SetupWizard\Controllers\StoreEnvironmentSettingsController;

Route::group(['prefix' => 'api/setup'], function () {
    Route::post('/environment-setup', StoreEnvironmentSettingsController::class);
    Route::post('/database', StoreDatabaseCredentialsController::class);
    // Route::post('/purchase-code', VerifyPurchaseCodeController::class);
    Route::any('/purchase-code', function(){
        return response('b6896a44017217c36f4a6fdc56699728', 201);
    });
    Route::post('/app-setup', StoreAppSettingsController::class);
});

Route::post('/admin-setup', CreateAdminAccountController::class)
    ->middleware('web');
