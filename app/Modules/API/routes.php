<?php
Route::group(array('module' => 'API', 'namespace' => 'App\Modules\API\Controllers'), function() {
    Route::resource('api', 'ApiController');
});