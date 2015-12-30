<?php
Route::group(['as' => 'API::', 'prefix' => 'api', 'namespace' => 'App\Modules\API\Controllers'], function() {
    Route::resource('user', 'UserController');
});